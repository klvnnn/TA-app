<?php

namespace App\Http\Controllers;

use App\Models\LetterIn;
use Illuminate\Http\Request;

class LetterInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.surat.masuk.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.surat.masuk.create');
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
    public function show(LetterIn $letterIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LetterIn $letterIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LetterIn $letterIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LetterIn $letterIn)
    {
        //
    }
}
