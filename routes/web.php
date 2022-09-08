<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenfessController;
use App\Http\Controllers\KomentarController;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('landing');
});

Auth::routes();

Route::get('/menfess' , [MenfessController::class , 'index'])->name('landing');

Route::post('/menfess/add' , [MenfessController::class , 'store']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menfess/{id}' , [MenfessController::class , 'show'])->name('menfess.show');
Route::post('/menfess/{id}/add-comment', [KomentarController::class , 'store']);
Route::get('/menfess/delete/{id}' , [AdminController::class , 'destroy']);

Route::get('/admin', [AdminController::class, 'index']);