<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function help(){
        echo 'help';
    }
    public function about(){
        echo 'about';
    }
}
