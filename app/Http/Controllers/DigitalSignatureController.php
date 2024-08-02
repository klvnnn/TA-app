<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalSignatureController extends Controller
{
    public function signPDF(){
        return view('pages.arsip.verification');
    }

    public function signRequest(){
        return view('pages.sign.request');
    }
}
