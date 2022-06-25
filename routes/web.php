<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


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


Route::post("login-user",[AdminController::class,'loginuser'])->name('login-user');
Route::get("/dashboard",[AdminController::class,'dashboard']);
Route::get("/signout",[AdminController::class,'signout']);
Route::get("/user",[AdminController::class,'Index']);
Route::get("/createuser",[UserController::class,'Create']);
Route::post("/Add-user",[UserController::class,'Store'])->name('Add-user');
//Route::get("vieworganization/{id}",[organizationController::class,'viewUser'])->name('view');
Route::get("/viewuser",[UserController::class,'viewUser'])->name('user.show');
Route::get("/edituser",[UserController::class,'edit'])->name('user.edit');
Route::post("/update-user",[UserController::class,'update'])->name('update-user');
Route::get("/deleteuser",[UserController::class,'delete'])->name('user.delete');



