<?php

use App\Http\Controllers\client\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[HomeController::class, 'index'] )->name('home');

// Route::get('/' , [TinController::class,   'all']);
Route::get('tin/{id}' , [HomeController::class,   'chiTiet'])->name('chitiet');
Route::get('cat/{id}' , [HomeController::class,   'tinTrongLoai'])->name('tintrongloai');

Route::get('/timkiem',[HomeController::class, 'timKiem'])->name('timkiem');
