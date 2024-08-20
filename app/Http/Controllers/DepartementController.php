<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\SubDepartement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subDepartements = SubDepartement::with('departement')->get();
        $subDepartements = $subDepartements->sortBy(function ($subDepartement) {
            return $subDepartement->departement->name;
        });
        return view('pages.departement.index',[
            'departement' => $subDepartements
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departement = Departement::get()->all();
        return view('pages.departement.create',[
            'departement' => $departement
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'departement_id' => 'required',
            'nama' => 'required',
            'kode' => 'required',
        ]);
        SubDepartement::create($validatedData);
        return redirect()->back()->with('success', 'Sukses, divisi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departement $departement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        //
    }
}
