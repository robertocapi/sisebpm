<?php

namespace impotlx\Http\Controllers;

use Illuminate\Http\Request;

class FrontControll extends Controller
{
    //
    public function index(){
    	return view('index');


    }
    public function admin(){
    		return view('admin');

    	
    }
    public function review(){
	return view('review');
    	
    }
}
