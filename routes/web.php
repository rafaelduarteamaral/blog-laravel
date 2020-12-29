<?php

use Illuminate\Support\Facades\Route;

   Route::get('/books', function () {
   return view('books');
   });

   Route::get('/produtos', function () {
   return view('bookProduct');
   });

   
   Route::get('/', \App\Http\Controllers\IndexController::class)->name('index');
   Route::post('/adminProdutos', [\App\Http\Controllers\ProdutosController::class, 'inserir'])->name('produtos.inserir');

   // Route::post('/adminProdutos', [\App\Http\Controllers\UploadController::class, 'inserirImagem'])->name('imagem.inserirImagem');
   
   
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

Route::get('/dashboard', function () {
   return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin', function () {
   return view('admin');
})->middleware(['auth'])->name('dashboard');

Route::get('/adminProdutos', function () {
   return view('adminProdutos');
})->middleware(['auth'])->name('adminProdutos');

Route::get('/adminUsuarios', function () {
   return view('adminUsuarios');
})->middleware(['auth'])->name('adminUsuarios');


Route::get('/adminPublicacoes', function () {
   return view('adminPublicacoes');
})->middleware(['auth'])->name('adminPublicacoes');



require __DIR__.'/auth.php';
