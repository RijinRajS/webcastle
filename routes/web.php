<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/userlogin', function () {
    return view('userlogin');
});
Route::get('/userregister', function () {
    return view('userregister');
});

Route::post("/register-user",[userController::class,'registeruser'])->name('register-user');
Route::post("login-user",[userController::class,'loginuser'])->name('login-user');
Route::get("/dashboard",[userController::class,'dashboard']);
Route::get("/signout",[userController::class,'signout']);

