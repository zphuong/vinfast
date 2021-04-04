<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typecar;
use App\Models\car;

class CarController extends Controller
{
    public function all(){
    	$all = array();
    	$all = car::all();
    	return view('admin.car.allcar')->with('data', $all);
    }
    public function add(){
    	$data = typecar::all();
    	return view('admin.car.addcar')->with('data', $data);
    }
    public function save(Request $request){
    	$result = new car;
    	$result['id_typecar'] = $request->typecar;
    	$result['name_car'] = $request->name;
    	$result['price'] = $request->price;
    	$result->save();
    	return redirect('administrator/allcar');
    }
   	public function edit($id){
   		$type = typecar::all();
   		$car = car::find($id);
    	return view('admin.car.editcar')->with('data', $type)->with('car', $car);
   	}
    public function update(Request $request, $id){
        $result['id_typecar'] = $request->typecar;
        $result['name_car'] = $request->name;
        $result['price'] = $request->price;
        car::where('id',$id)->update($result);
        return redirect('administrator/allcar');
    }
    public function delete($id){
    	car::destroy($id);
    }

}
