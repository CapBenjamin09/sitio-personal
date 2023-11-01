<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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

//LOGIN
Route::get('/login', [SessionController::class, 'index'])->name('login.index');
Route::post('/login', [SessionController::class, 'authenticate'])->name('login.authenticate');

// RUTA PORTFOLIO
Route::get('/portfolio', [ProjectsController::class, 'index'])->name('portfolio.index');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::get('/contact/{contact}', [ContactController::class, 'show'])->name('contact.show');
Route::delete('/portfolio/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::middleware('auth')->group(function () {
    //LOGOUT
    Route::post('/logout', [SessionController::class, 'logout'])->name('logout');

    //RUTA DE PORTFOLIO
    Route::post('/portfolio', [ProjectsController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio/create', [ProjectsController::class, 'create'])->name('portfolio.create');
    Route::patch('/portfolio/{project}', [ProjectsController::class, 'update'])->name('portfolio.update');
    Route::delete('/portfolio/{project}', [ProjectsController::class, 'destroy'])->name('portfolio.destroy');
    Route::get('/portfolio/{project}/edit', [ProjectsController::class, 'edit'])->name('portfolio.edit');

});
