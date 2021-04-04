<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
session_start();

class AdminController extends Controller
{
	public function dashboard(){
		return view('admin/dashboard');
	}
	public function login(){
		return view('admin.login');
	}
	public function savelogin(Request $request){
		$user = $request->username;
		$password = md5($request->password);
		$result = User::where('name', $user)->where('password', $password)->first();
		if($result){
			Session::put('user', $result->name);
		}
		return redirect('administrator');
	}
	public function user(){
		return view('admin.user.user');
	}
}
