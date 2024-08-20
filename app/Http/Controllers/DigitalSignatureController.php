<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Departement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use phpseclib3\Crypt\EC;
use phpseclib3\Crypt\EC\PrivateKey;
use phpseclib3\Crypt\EC\PublicKey;
use phpseclib3\Crypt\PublicKeyLoader;

class DigitalSignatureController extends Controller
{
    public function signRequest(){
        $signRequest = Archive::where('status', 'diproses')->latest()->get();
        $signRequestCount = Archive::where('status','diproses')->count();
        return view('pages.sign.request',[
            'signRequest'=> $signRequest,
            'signRequestCount'=> $signRequestCount,
        ]);
    }
    public function generateKeys(){
        $privateKey = EC::createKey('secp256k1');
        $publicKey = $privateKey->getPublicKey();

        // Encode keys to PEM format
        $privateKeyPem = $privateKey->toString('PKCS8');
        $publicKeyPem = $publicKey->toString('PKCS8');

        //Simpan Private Key dalam local storage
        $path = 'private_keys/'.Auth::user()->role.'-'.Auth::id().'-'.Auth::user()->name.'.pem';
        Storage::put($path, $privateKeyPem);

        // Simpan kunci pada database, sesuaikan dengan model User Anda
        $user = Auth::user();
        $user->public_key = $publicKeyPem;
        $user->private_key = $path;
        $user->save();

        return redirect()->back()->with('success', 'Kunci Berhasil dibuat!');
    }
    public function signDocument(Request $request, $id)
    {
        $document = Archive::findOrFail($id);
        $user = Auth::user();

        if (is_null($user->private_key) || !Storage::exists($user->private_key)) {
            // Tangani kasus jika private key null atau file tidak ditemukan
            return redirect()->back()->with('error', 'Anda belum memiliki kunci! Generate kunci terlebih dahulu pada halaman profile!');
        }

        //Load private key user
        $privateKey = Storage::get($user->private_key);
        $ecdsa = EC::loadPrivateKey($privateKey);
        // Baca file dokumen
        $fileContent = Storage::get($document->file_arsip);

        $hash = hash('sha256', $fileContent, true);
        $signature = $ecdsa->sign($hash);

        $document->signature = base64_encode($signature);
        $document->signed_by = Auth::id();
        $document->status = 'signed';
        $document->save();

        return redirect()->back()->with('success', 'Tanda tangan berhasil diterapkan');
    }

    public function verifyDocument(Request $request, $id)
    {
        $document = Archive::findOrFail($id);
        $user = User::findOrFail($document->signed_by);
        
        // Load Signature
        $signature = base64_decode($document->signature);
        // Load Public Key
        $publicKey = $user->public_key;
        $ecdsa = EC::loadPublicKey($publicKey);

        //Testing Signature Modification
        // $signatureTampered = substr_replace($signature, '00', 0, 1);
        
        // Tambahkan teks pada akhir file
        $fileContent = Storage::get($document->file_arsip);
        // $modifiedFileContent = substr_replace($fileContent, 'X', 10, 1); // Ganti karakter ke-10 dengan 'X'

        // Hash filecontent
        $hash = hash('sha256', $fileContent, true);

        //Verify apakah nilai hash sama
        $isValid = $ecdsa->verify($hash, $signature);

        if($isValid){
            return view('pages.sign.signatureValid')->with('document',$document);
        }else
        return view('pages.sign.signatureInvalid')->with('document',$document);
    }

    public function show($id){
        $document = Archive::findOrFail($id);
        return view('pages.sign.show',[
            'document' => $document,
        ]);
    }

    public function rejectDocument(Request $request)
    {
        $request->validate([
            'rejection_note' => 'required|string|max:255',
        ]);

        $archive = Archive::findOrFail($request->reject_id);
        $archive->status = 'ditolak';
        $archive->rejection_note = $request->input('rejection_note');
        $archive->save();

        return redirect()->back()->with('success', 'Sukses! Dokumen telah ditolak');
    }
}
