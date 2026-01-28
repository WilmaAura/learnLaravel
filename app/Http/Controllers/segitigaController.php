<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class segitigaController extends Controller
{
    public function perkalian (){
        $alas=5;
        $tinggi=4;
        $luas=$alas*$tinggi*0.5;
        return view ('segitiga',['luasnya'=> $luas]);
    }
}
