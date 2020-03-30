<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function register(){
    	return view('layouts.registration');
    }

    public function login(){
    	return view('layouts.login');
    }
}
