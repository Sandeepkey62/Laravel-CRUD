<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/user_dets',[CustomAuthController::class,'User_Details']);
Route::get('/registration',[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::POST('/registration-user',[CustomAuthController::class,'registration_user'])->name('registration-user');
Route::POST('/login-user',[CustomAuthController::class,'login_user'])->name('login-user');
Route::get('/logout',[CustomAuthController::class,'logout']);
Route::get('/user_details',[CustomAuthController::class,'show_user_details']);
Route::POST('/user_detail',[CustomAuthController::class,'insert_user_details'])->name('user_detail');
Route::get('/user_details',[CustomAuthController::class,'show_user_details']);
Route::get('/show_user_details',[CustomAuthController::class,'display_user_details']);
Route::get('/user_update',[CustomAuthController::class,'user_update_show']);
Route::get('edit_user/{id}', [CustomAuthController::class, 'edit_user']);
Route::put('edit_user/{id}',[CustomAuthController::class,'update_user_details']);
Route::get('delete/{id}',[CustomAuthController::class,'delete_user_details']);






