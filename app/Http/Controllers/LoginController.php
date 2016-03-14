<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller {
	public function index() {
		return view ( 'login' );
	}
	public function postlogin(Request $req) {
		$name = $req->get ( 'username' );
		$password = $req->get ( 'password' );
		// dd($password);
		if (Auth::attempt ( [ 
				'name' => $name,
				'password' => $password 
		] )) {
			dd ( "222" );
			// Authentication passed...
			return Redirect::back ();
		} else {
			// dd("h20iii");
			Session::flash ( 'message', "Invalid Credentials , Please try again." );
			Session::save();
			return Redirect::back ();
		}
	}
	public function register() {
		return view ( 'auth.register' );
	}
	public function postregister(Request $req) {
		$user = new User ();
		$user->name = $req->get ( 'username' );
		$user->email = $req->get ( 'email' );
		$user->password = Hash::make ( $req->get ( 'password' ) );
		$user->remember_token = $req->get ( 'remember_token' );
		$user->save ();
		return redirect ( '/login' );
	}
}
