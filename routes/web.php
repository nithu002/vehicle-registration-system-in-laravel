<?php

use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Viewcontroller;
use Illuminate\Contracts\View\View;
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

Route::get('/',[LoginController::class,'login']);
Route:: post('/login_check',[Logincontroller::class,'store']);
Route::get('/dashboard',[Viewcontroller::class,'dashboard']);

// Route::post('login_check',[])
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
