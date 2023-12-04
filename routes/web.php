<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;
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



Route::get('/front-master',[frontController::class,'master']);
Route::get('/',[frontController::class,'frontpage'])->name('front.frontpage');
Route::get('/front-gallery',[frontController::class,'gallery'])->name('front.gallery');
Route::get('/front-certicate',[frontController::class,'gallery'])->name('front.certificate');