<?php

namespace App\Http\Controllers;

use App\Models\LetterOut;
use Illuminate\Http\Request;

class LetterOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $letter_out = LetterOut::latest()->get();
        return view('pages.surat.keluar.index',[
            'letter_out' => $letter_out
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.surat.keluar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LetterOut $letterOut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LetterOut $letterOut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LetterOut $letterOut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LetterOut $letterOut)
    {
        //
    }
}
