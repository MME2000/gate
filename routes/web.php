<?php

use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

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

    $currentUser = User::find(3);

    dd(Gate::allows('show-user',$currentUser));

})->middleware('auth');

Route::get('register',[RegisterController::class,'formRegister']);
Route::post('register',[RegisterController::class,'register'])->name('register');

Route::get('login',[LoginController::class,'formLogin']);
Route::post('login',[LoginController::class,'login'])->name('login');

Route::resource('post',PostController::class)->except('show')->middleware('auth');
