<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\organizationController;

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
Route::get("/profile",[userController::class,'profile']);
Route::get("/signout",[userController::class,'signout']);
Route::get("/organization",[userController::class,'organizationShow']);
Route::get("/createorganization",[organizationController::class,'organization']);
Route::post("/Add-organization",[organizationController::class,'create'])->name('Add-organization');
//Route::get("vieworganization/{id}",[organizationController::class,'viewUser'])->name('view');
Route::get("/vieworganization",[organizationController::class,'viewUser'])->name('organisation.show');
Route::get("/editorganization",[organizationController::class,'edit'])->name('organisation.edit');
Route::post("/update-organization",[organizationController::class,'update'])->name('update-organization');
Route::get("/deleteorganization",[organizationController::class,'delete'])->name('organisation.delete');

