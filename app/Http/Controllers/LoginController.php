<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller {
public function index() {
		return view ( 'login' )->withName('')->withMessage('');
	}
	public function postlogin(Request $req) {
		$rules = array (
					
				'username' => 'required',
				'password' => 'required'
				
		);
		$validator = Validator::make ( Input::all (), $rules );
		if ($validator->fails ()) {
				
			return Redirect::back ()->withErrors ( $validator );
			//dd($validator);
		}
		
		$name = $req->get ( 'username' );
		$password = $req->get ( 'password' );
		
		
		if (Auth::attempt ( [ 
				'name' => $name,
				'password' => $password 
		] )) {
			
			Session::put ( 'name', $name );
			$name = (session()->get('name'));
			Session::save();
		
			// Authentication passed...
			return redirect('/dashboard');
		} else {
			Session::flash ( 'message', "Invalid Credentials , Please try again." );
			//Session::save();
			//session::save();
			return view('login')->withName('')->withMessage('Invalid Credentials , Please try again.');
		}
	}
	public function register() {
		return view ( 'auth.register' );
	}
	public function postregister(Request $req) {
		$rules = array (
				 
				'username' => 'required|min:5',
				'password' => 'required|min:6|confirmed',
				'email'=> 'required|email'
		);
		$validator = Validator::make ( Input::all (), $rules );
		if ($validator->fails ()) {
			
			return Redirect::back ()->withErrors ( $validator );
			//dd($validator);
		}
	
		else{
		$user = new User ();
		$user->name = $req->get ( 'username' );
		$user->email = $req->get ( 'email' );
		$user->password = Hash::make ( $req->get ( 'password' ) );
		$user->remember_token = $req->get ( 'remember_token' );
		
		
		
		$user->save ();
		
		return redirect ( '/login' );
		}
	}
	public function dashboard() {
		return view ( 'dashboard' );
	}
}
