<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //disini mengatur laman home saja
    public function index()
    {
    	
    	return view('home');
    }
}
