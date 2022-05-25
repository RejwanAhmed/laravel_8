<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladeController extends Controller
{
    function loadview()
    {
        $data = ['rejwan','supty','Rahat','ani'];
        return view('blade_view',['name'=>$data]);
    }
}
