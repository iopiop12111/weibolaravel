<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
	public function index(){
		echo 11;
	}
	public function test(){
	    return view('test/test');
    }
}
