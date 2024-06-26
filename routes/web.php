<?php

use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/list-user',[UserController::class,'showUser']);
Route::get('/thong-tin-sinh-vien',[SinhVienController::class,'listUser']);

//Params :?id=1&name=a ....  & Slug : /1/a/v

//Slug 
// http://wd18321-php03.test/get-user/1
Route::get('/get-user/{id}/{name?}',[UserController::class,'getUser']);

//Params
// http://wd18321-php03.test/update-user?id=2
Route::get('/update-user',[UserController::class,'updateUser']);
