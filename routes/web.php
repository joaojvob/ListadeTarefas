<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\IndexController;

// auth page
Route::get('/auth', [RegisterController::class, 'index'])->name('authentication.auth');

// Rotas de login e logout
Route::post('/auth/login', [RegisterController::class, 'login'])->name('auth.login');
Route::post('/auth/create', [RegisterController::class, 'create'])->name('auth.create');

Route::get('/showLoginForm', [RegisterController::class, 'showLoginForm']);
Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');


// Página de home após login bem-sucedido (exemplo)
Route::get('/home', function () {
    return view('home.index');
})->name('home')->middleware('auth');


/*
Route::group(['middleware'=> ['auth'], 'namespace' =>'admin'],function(){
    // Página de home após login bem-sucedido (exemplo)
    Route::get('/home', function () {
        return view('home.index');
    })->name('home')->middleware('auth');

    // Rota para registro
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    // Rotas de login e logout
    Route::post('/auth', 'RegisterController@login')->name('authentication.auth');
    Route::post('/create', 'RegisterController@create')->name('authentication.create');
    Route::get('/auth', 'RegisterController@showLoginForm');
    Route::post('/logout', 'RegisterController@logout')->name('logout');
});

*/
