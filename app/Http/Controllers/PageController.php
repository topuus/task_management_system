<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
class PageController extends Controller
{
	public function tasks(){
		return view('partials.navPages.tasks',array('user'=>Auth::user() ));
	}

	public function dashboard(){
		return view('partials.navPages.dashboard',array('user'=>Auth::user() ));
	}

	public function mytasks(){
		return view('partials.navPages.mytasks',array('user'=>Auth::user() ));
	}

	public function clients(){
		return view('partials.navPages.clients',array('user'=>Auth::user() ));
	}

	public function projects(){
		return view('partials.navPages.projects',array('user'=>Auth::user() ));
	}

	public function priority(){
		return view('partials.navPages.priority',array('user'=>Auth::user() ));
	}

	public function profile(){
		return view('partials.user.userinfo',array('user'=>Auth::user() ));
	}

    public function setting(){
		return view('partials.user.setting',array('user'=>Auth::user() ));
	}

	public function update_avatar(Request $request){
		if ($request->hasFile('avatar')) {
			$avatar = $request->file('avatar');
			$filename = time() . '.' . $avatar->getClientOriginalExtension();
			Image::make($avatar)->resize(300,300)->save( public_path('../resources/assets/img/' . $filename));

			$user = Auth::user();
			$user->avatar = $filename;
			$user->save();
		}

		return view('partials.user.setting',array('user'=>Auth::user()) );
	}
}
