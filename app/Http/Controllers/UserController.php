<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getuser(){
        $Users = User::all();
        return view('users.tableusers',compact('Users'));

    }

}
