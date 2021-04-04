<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\typecar;

class TypecarController extends Controller
{
    public function all(){
    	$data = array();
    	$data = typecar::all();
    	return view('admin.typecar.alltypecar')->with('data', $data);
    }
    public function add(){
    	return view('admin.typecar.addtypecar');
    }
    public function save(Request $request){
    	$data = new typecar();
    	$data['name_car'] = $request->input('name');
    	$data['slug'] = $request->input('slug');
    	$data['image'] = $request->file('image');
    	$data['price_low'] = $request->input('price');
    	$data['content'] = $request->content;
    	$get_img = $request->file('image');
    	if ($get_img) {
			$name_img = $get_img->getClientOriginalName();
			$data['image'] = $name_img;
			$get_img->move( './public/image', $name_img);
		}
		$data->save();
		return view('admin.typecar.alltypecar');
    }
    public function edit($id){
    	$result = typecar::find($id);
    	return view('admin.typecar.edittypecar',['value' => $result]);
    }
    public function update(Request $request, $id){
    	
    	$data['name_car'] = $request->input('name');
    	$data['slug'] = $request->input('slug');
    	$data['image'] = $request->file('image');
    	$data['price_low'] = $request->input('price');
    	$data['content'] = $request->content;
    	$get_img = $request->file('image');
    	if ($get_img) {
			$name_img = $get_img->getClientOriginalName();
			$data['image'] = $name_img;
			$get_img->move( './public/image', $name_img);
		}
		else{
			$data['image'] = Null;
		}
		typecar::where('id',$id)->update($data);
		return redirect('administrator/alltypecar');
    }
    public function delete($id){
    	typecar::destroy($id);
    }
}
