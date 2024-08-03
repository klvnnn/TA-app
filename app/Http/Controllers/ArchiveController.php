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
        $arsip = Archive::latest()->get();
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
            'file_arsip' => 'required',
            'departement' => 'required',
        ]);
        $path = Storage::putFileAs('file_arsip', $request->file('file_arsip'), $request->user()->id);

        Archive::create($validatedData);
        return redirect()->back()->with('message', 'Sukses! Verifikasi Sedang Diproses!')->with('file_arsip',$path);
    }

    /**
     * Display the specified resource.
     */
    public function show(Archive $archive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Archive $archive)
    {
        //
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
