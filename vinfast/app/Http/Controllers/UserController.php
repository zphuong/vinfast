<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
	public function save(Request $request){
		$data = new User();
		$data['name'] = $request->input('user');
		$data['phone'] = $request->input('phone');
		$data['stt'] = 1;
		$data->save();
		return back();
	}
	public function user(){
		$user = User::orderBy('stt', 'desc')->get();
		return view('admin.user.user')->with('user',$user);
	}
	public function edituser($id){
		$stt = User::find($id);
		$stt->stt = 0;
		$stt->save();
		return redirect('administrator/user');
	}
}
