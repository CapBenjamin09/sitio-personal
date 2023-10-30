<?php

use App\Http\Controllers\SessionController;
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

Route::view('/', 'home')->name('home');

//Login and Logout
Route::get('/login', [SessionController::class, 'index'])->name('login.index');
Route::post('/login', [SessionController::class, 'authenticate'])->name('login.authenticate');


Route::middleware('auth')->group(function () {

    Route::post('/logout', [SessionController::class, 'logout'])->name('logout');

});
