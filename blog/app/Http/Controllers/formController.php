<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public $sa;
    function getData(Request $request)
    {
        // $this->sa=  $request->input();
        // echo $this->sa['username']."<br>";
        // echo $this->sa['password'];
        // return $request->input();
        
        // Validation function
        $validator = $request->validate([
            'username' => 'required|min:8',
            'password'=>'required|min:6'
        ]);
    }
}
