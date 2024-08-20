<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Departement;
use App\Models\SubDepartement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $departementIdUser = $user->departement_id;
        // Ambil departemen berdasarkan department_id pengguna
        $departement = Departement::where('id', $departementIdUser)->first();
        // Ambil nama departemen
        $departementName= $departement->nama;
        // Ambil arsip dengan status 'diproses' atau 'ditolak' dan filter berdasarkan departemen pengguna
        $arsip = Archive::where(function ($query) {$query->where('status', 'signed');})
                ->where('departement', $departementName) // Tambahkan filter berdasarkan departemen pengguna
                ->latest()
                ->get();

        return view('pages.arsip.index',[
            'arsip' => $arsip,
        ]);
    }

    //Manager
    public function alldata(){
        $arsip = Archive::where('status', 'signed')->latest()->get();

        return view('pages.arsip.alldata',[
            'arsip' => $arsip,
        ]);
    }

    //Status
    public function status()
    {
        $user = Auth::user();
        $departementIdUser = $user->departement_id;
        // Ambil departemen berdasarkan department_id pengguna
        $departement = Departement::where('id', $departementIdUser)->first();
        // Ambil nama departemen
        $departementName= $departement->nama;

        // Ambil arsip dengan status 'diproses' atau 'ditolak' dan filter berdasarkan departemen pengguna
        $arsip = Archive::where(function ($query) {$query->where('status', 'diproses')->orWhere('status', 'ditolak');})
                ->where('departement', $departementName) // Tambahkan filter berdasarkan departemen pengguna
                ->latest()
                ->get();

        return view('pages.arsip.status', [
            'arsip' => $arsip,
        ]); 
    }
    //Verify
    public function verify()
    {
        $user = Auth::user();
        $departementIdUser = $user->departement_id;
        // Ambil departemen berdasarkan department_id pengguna
        $departement = Departement::where('id', $departementIdUser)->first();
        // Ambil nama departemen
        $departementName= $departement->nama;
        // Ambil arsip dengan status 'diproses' atau 'ditolak' dan filter berdasarkan departemen pengguna
        $arsip = Archive::where(function ($query) {$query->where('status', 'signed');})
                ->where('departement', $departementName) // Tambahkan filter berdasarkan departemen pengguna
                ->latest()
                ->get();

        return view('pages.arsip.verification',[
            'arsip' => $arsip,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        $departementIdUser = $user->departement_id;

        // Ambil semua sub departemen berdasarkan departement_id pengguna
        $subDepartements = SubDepartement::where('departement_id', $departementIdUser)->get();

        // Ambil departemen berdasarkan department_id pengguna
        $departement = Departement::where('id', $departementIdUser)->first();

        // Ambil nama departemen
        $departementName = $departement->nama;

        return view('pages.arsip.create', [
            'departementName' => $departementName,
            'subDepartements' => $subDepartements,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_arsip' => 'required',
            'tanggal_arsip' => 'required',
            'file_arsip' => 'required|file|mimes:pdf',
            'departement' => 'required',
            'sub_departement_id' => 'required',
        ]);
        //Upload Storage
        $filename = time() . '.' . $request->file_arsip->extension();
        $validatedData['file_arsip'] = Storage::putFileAs('public/file_arsip', $request->file_arsip, $filename);

        Archive::create($validatedData);
        return redirect()->back()->with('success', 'Data berhasil di-input! Verifikasi Sedang Diproses! Check status dokumen');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $arsip = Archive::findOrFail($id);
        return view('pages.arsip.show',[
            'arsip' => $arsip,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Archive $archive)
    {
        $arsip = Archive::findOrFail($archive);
        return view('pages.arsip.edit',[
            'arsip' => $arsip,
        ]);
    }

    public function resetRejected(){
        $user = Auth::user();
        $departementIdUser = $user->departement_id;
        // Ambil departemen berdasarkan department_id pengguna
        $departement = Departement::where('id', $departementIdUser)->first();
        // Ambil nama departemen
        $departementName= $departement->nama;

        // Ambil arsip dengan status 'diproses' atau 'ditolak' dan filter berdasarkan departemen pengguna
        $arsip = Archive::where(function ($query) {$query->where('status', 'ditolak');})
                ->where('departement', $departementName) // Tambahkan filter berdasarkan departemen pengguna
                ->count();

        if($arsip == 0){
            return redirect()->route('arsip.status')->with('error','Tidak ada dokumen yang ditolak!');
        }else
        Archive::where(function ($query) {$query->where('status', 'ditolak');})
                ->where('departement', $departementName) // Tambahkan filter berdasarkan departemen pengguna
                ->delete();
        return redirect()->route('arsip.status')->with('success','Data berhasil dihapus');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Archive $archive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Archive $archive)
    {
        //
    }
}
