<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function tasks(){
		return view('partials.navPages.tasks');
	}

	public function dashboard(){
		return view('partials.navPages.dashboard');
	}

	public function mytasks(){
		return view('partials.navPages.mytasks');
	}

	public function clients(){
		return view('partials.navPages.clients');
	}

	public function projects(){
		return view('partials.navPages.projects');
	}

	public function priority(){
		return view('partials.navPages.priority');
	}

	public function profile(){
		return view('partials.user.userinfo');
	}

		public function setting(){
		return view('partials.user.setting');
	}
}
