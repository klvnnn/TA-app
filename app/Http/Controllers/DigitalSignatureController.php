<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DigitalSignatureController extends Controller
{
    public function signPDF()
    {
        $departement = Departement::get()->all();
        return view('pages.arsip.verification',[
            'departement' => $departement
        ]);
    }

    public function signRequest()
    {
        return view('pages.sign.request');
    }
}
