<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// for importing the database
use Illuminate\Support\Facades\DB;

class database1Controller extends Controller
{
    function index()
    {
        // echo "<pre>";
        // print_r (DB::select('select * from users'));
        // echo "</pre>";
        
        return DB::select("select * FROM users");

    }
}
