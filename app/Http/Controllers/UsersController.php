<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function createUser(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));

        $result = UsersModel::insert([
            'name'=> $name,
            'email'=> $email,
            'password'=> $password
        ]);
        return $result;
    }
    public function userDetails($email)
    {
        $user = UsersModel::Where('email',$email)->get();
        return $user;
    }
}
