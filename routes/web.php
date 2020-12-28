<?php

use Illuminate\Support\Facades\Route;

   Route::get('/books', function () {
   return view('books');
   });

   Route::get('/login', function () {
   return view('login');
   });

   Route::get('/loginerro', function () {
      return view('loginerro');
   });

   Route::get('/produtos', function () {
   return view('bookProduct');
   });

   Route::get('/cadastro', function () {
      return view('cadastro');
   });
   
   Route::get('/admin', function () {
      return view('admin');
   });

   Route::get('/adminProdutos', function () {
      return view('adminProdutos');
   });  

   Route::get('/adminUsuarios', function () {
      return view('adminUsuarios');
   });  

   Route::get('/adminPublicacoes', function () {
      return view('adminPublicacoes');
   });  

   Route::get('/', \App\Http\Controllers\IndexController::class)->name('index');
   Route::get('/session', [\App\Http\Controllers\SessionController::class, 'session'])->name('session');
   Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('user.login');
   Route::post('/loginerro', [\App\Http\Controllers\UserController::class, 'login'])->name('user.login');
   Route::post('/cadastro', [\App\Http\Controllers\CadastroController::class, 'inserir'])->name('cadastro.inserir');
   