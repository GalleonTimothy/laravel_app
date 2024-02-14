<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from UserController';
    }

    // public function goto(){
    //     return view('Users');
    // }

    public function show($id){
        $data = array(
            "id" =>$id,
            "name" =>"Timothy",
            "age" =>22,
            "email" =>"timthyguiang11142001@gmail.com"
        );
        return controllers('UserController', ['$data' => $data]);

    }
}
