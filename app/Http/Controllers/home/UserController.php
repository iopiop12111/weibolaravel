<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user){
        return view('home.user.show',['info'=>$user]);
    }
}
