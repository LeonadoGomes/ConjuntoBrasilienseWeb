<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\lojasOficiaisController;
use app\Http\Controllers\LojasController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/detalhes', function () {
    return view('detail');
})->name('detalhes');

Route::get('/supermercado', function () {
    return view('supermercado');
})->name('supermercado');


Route::get('/lojasOficiais', [lojasOficiaisController::class, 'index'])->name('lojasOficiais');


Route::get('/login', function () {
    return view('login.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/lojasApple', function () {
    return view('lojas.apple');
})->name('loja.apple');

Route::get('/lojasxiaomi', function () {
    return view('lojas.xiaomi');
})->name('loja.xiaomi');

Route::get('/adicionarLoja', function () {
    return view('addLojas.adicionarLoja');
})->name('adicionarLoja');

Route::post('/adicionar-loja', [lojasOficiaisController::class, 'store'])->name('adicionarLoja.store');
