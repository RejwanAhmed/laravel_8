<?php

use Illuminate\Support\Facades\Route;
// import UserController
use App\Http\Controllers\UserrController;
use App\Http\Controllers\bladeController;
use App\Http\Controllers\formController;
use App\Http\Controllers\database1Controller;
use Illuminate\Contracts\Auth\UserProvider;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// It won't let go to the welcome page it will redirect to about route;
// Route::get('/', function () {
//     return redirect('/about');
// });

// first is url = / and second is view = welcome
Route::view('/','welcome');

Route::get('/hello', function () {
    return view('hello');
});


Route::get('name/{firstname}/{lastname}', function ($firstname,$lastname) {
    return view('name',['firstname'=>$firstname,'lastname'=>$lastname]);
});
// Route::get('/about', function()
// {
//     return view('about');
// });
// First is route name and second is view name
Route::view("/about","about_page");

// This view is from hudai folder beacuse i have added a new directory in config/view.php file
Route::view("/hudai","hudai");

// controller theke call korsi, two parameters 1. controller name, 2. function name
Route::get('/user', [UserrController::class,'show']);
Route::get('/show_welcome', [UserrController::class,'show_welcome']);

Route::get('/show_users/{user_name}', [UserrController::class,'show_users']);

Route::get('/show_parameters/{id}',[UserrController::class,'show_parameters']);

// laravel 7 version for calling controller
// Route::get('/user','UserController@show');

Route::view('/header_users','header_users');

Route::get('/blade_file',[bladeController::class,'loadview']);

Route::post('/form_data',[formController::class,'getData']);
Route::view('/login','form');

// Global Middle Ware
// Route::view('welcome_global_middleware','global_middleware_check');
// Route::view('noaccess','global_middle_ware_no_access');

// Group Middleware
// Route::view('home','home');

// Route::view('noaccess','global_middle_ware_no_access');

// Route::group(['middleware'=>['protectPage']],function(){
//     Route::view('users','users');
//     Route::view('welcome_page','welcome');
// });

// Route Middleware

// Route::view('users','users')->middleware('protectPage');
// Route::view('welcome','welcome');
// Route::view('noaccess','global_middle_ware_no_access');

// Database

Route::get('/database1',[database1Controller::class,'index']);