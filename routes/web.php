<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\latihanController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\NilaiController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('post', PostController::class);

Route::resource('siswa', latihanController::class);

Route::resource('jurusan', JurusanController::class );

Route::resource('nilai', NilaiController::class);