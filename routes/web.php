<?php

use Illuminate\Support\Facades\Route;

   Route::get('/books', function () {
   return view('books');
   });

   Route::get('/login', function () {
   return view('login');
   });

   Route::get('/produtos', function () {
   return view('bookProduct');
   });

   Route::get('/cadastro', function () {
      return view('cadastro');
      });

   Route::get('/', \App\Http\Controllers\IndexController::class)->name('index');
   Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('user.login');
   Route::post('/cadastro', [\App\Http\Controllers\CadastroController::class, 'inserir'])->name('cadastro.inserir');
   