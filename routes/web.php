<?php

use App\Http\Controllers\ProjectsController;
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

Route::get('/portfolio', [ProjectsController::class, 'index'])->name('portfolio.index');
Route::post('/portfolio', [ProjectsController::class, 'store'])->name('portfolio.store');
Route::get('/portfolio/create', [ProjectsController::class, 'create'])->name('portfolio.create');
Route::delete('/portfolio/{project}', [ProjectsController::class, 'destroy'])->name('portfolio.destroy');
Route::get('/portfolio/{project}/edit', [ProjectsController::class, 'edit'])->name('portfolio.edit');


Route::get('/about-me', [AboutMeController::class, 'index'])->name('about-me');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::middleware('auth')->group(function () {

    Route::post('/logout', [SessionController::class, 'logout'])->name('logout');

});
