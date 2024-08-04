<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arsip = Archive::where('status', 'Verified')->latest()->get();
        return view('pages.arsip.index',[
            'arsip' => $arsip,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.arsip.create');
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
        ]);
        //Upload Storage
        $filename = time() . '.' . $request->file_arsip->extension();
        $validatedData['file_arsip'] = Storage::putFileAs('public/file_arsip', $request->file_arsip, $filename);

        Archive::create($validatedData);
        return redirect()->back()->with('success', 'Data berhasil di-input! Verifikasi Sedang Diproses!');
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
