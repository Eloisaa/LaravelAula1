<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StringsController extends Controller
{
    public function mai($original){
    	$modificada = strtoupper ($original);
    	return $modificada;
    }

    public function teste($original){
    	$modificada =  strtoupper($original);
    	return view ("exibirMaiusculo",["original" => $original, "modificada" => $modificada]);
    } 
}
