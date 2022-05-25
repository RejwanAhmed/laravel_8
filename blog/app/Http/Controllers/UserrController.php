<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserrController extends Controller
{
    function show()
    {
        return "Hello From Controller";
    }
    function show_welcome()
    {
        return view('welcome');
    }
    function show_users($user_name)
    {
        return view('users',['name'=>$user_name]);
    }
    function show_parameters($id)
    {
        return $id;
    }
}
