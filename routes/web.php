<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\DashboardMenuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Contracts\Cache\Store;
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
    return view('home' ,[
            "title" => "Home"
    ]);
});

Route::get('about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Maya Anugrah Syafira",
        "email" => "mayra95@gmail.com",
        "img" => "foto1.jpg"
    ]);
});

Route::get('news', [BeritaController::class,'index']);
Route::get('/news/{news_posts:slug}',[BeritaController::class, 'show']);

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/menu/checkSlug', [DashboardMenuController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/menu', DashboardMenuController::class)->middleware('auth');