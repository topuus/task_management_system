<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(){
    	return view('partials.login');
    }

    public function register(){
    	return view('partials.register');
    }


}