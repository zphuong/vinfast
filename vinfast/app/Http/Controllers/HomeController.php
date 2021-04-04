<?php

namespace App\Http\Controllers;
use App\Models\typecar;
use App\Models\car;

use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public function index(){
        $data = typecar::orderBy('id','desc')->get();
        return view('home')->with('data', $data);
    }
    public function about(){
    	return view('about');
    }
    public function car(){
        $data = typecar::orderBy('id','desc')->get();
    	return view('car')->with('data', $data);
    }
    public function installment(){
    	return view('installment');
    }
    public function contact(){
    	return view('contact');
    }
    protected function detailcar($slug){
        $typecar = typecar::where('slug',$slug)->first();
        $car = car::where('id_typecar',$typecar['id'])->get();
        return view('detailcar')->with('typecar',$typecar)->with('car',$car);
    }
}
