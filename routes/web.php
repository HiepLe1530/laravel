<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KhoaHocController;

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

Route::get('/', function () {
    return view('admin.home', ['title'=>'Trang chủ']);
});

Route::get('/Hiep',function(){
    return view('layout.main', ['title'=>'Trang chủ']);
});

Route::get('/login1',function(){
    return view('admin.login1');
});

// Route::get("/login", function(){
//    return view('admin.login');
// });

Route::get('/login', [LoginController::class, 'index']);
Route::post('/postlogin', [LoginController::class, 'postlogin']);

Route::prefix('khoahoc')->group(function(){
    Route::get('/',[KhoaHocController::class, 'getallkhoahoc'])->name('khoahoc.getlistkhoahoc');
    Route::get('/add', [KhoaHocController::class, 'addkhoahoc']);
    Route::post('postadd',[KhoaHocController::class, 'postaddkhoahoc']);
});