<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function tasks(){
		return view('partials.navPages.tasks');
	}
}
