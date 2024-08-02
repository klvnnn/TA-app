<?php

namespace App\Http\Controllers;

use App\Models\LetterFormat;
use Illuminate\Http\Request;

class LetterFormatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.panduan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.panduan.create');
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
    public function show(LetterFormat $letterFormat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LetterFormat $letterFormat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LetterFormat $letterFormat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LetterFormat $letterFormat)
    {
        //
    }
}
