<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\LoginRegisterController;
use App\http\Controllers\DashboardController;

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

Route::get('/s', function () {
    return view('welcome');
});
Route::get('/', function (){
    if (session()->has('email')) {
        return redirect('/Dashboard');
    }
    return view('home');
});

Route::get('/githubCallBack',[LoginRegisterController::class,'GitHubCallBack']);
Route::get('/joinup',[LoginRegisterController::class,'GitHub']);

Route::get('/google',[LoginRegisterController::class,'Google']);
Route::get('/googleCallBack',[LoginRegisterController::class,'GoogleCallBack']);

Route::get('/facebook',[LoginRegisterController::class,'Facebook']);
Route::get('/facebookCallBack',[LoginRegisterController::class,'FacebookCallBack']);

Route::get('/linkedin',[LoginRegisterController::class,'LinkedIn']);
Route::get('/linkedinCallBack',[LoginRegisterController::class,'LinkedinCallBack']);


Route::get('/logout',[LoginRegisterController::class,'LogOut']);


Route::get('/Dashboard',[DashboardController::class,'Dashboard'])->middleware('logCheck');
