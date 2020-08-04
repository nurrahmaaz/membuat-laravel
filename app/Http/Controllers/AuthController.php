<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //disini mengatur laman register dan welcome (selamatdtg)
    public function index(){
    	return view('register');//memanggil register yang berisi form
    }

    public function welcome(Request $request){
    	$data = $request->pertama; //menampung parameter kata pertama
    	$data1 = $request->kedua;
    	return view('selamatdtg', compact('data','data1'));//menampilkan nama pertama
    }


    
}
