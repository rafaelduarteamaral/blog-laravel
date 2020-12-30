<?php

use Illuminate\Support\Facades\Route;



   Route::get('/', function () {
      return view('index');
   });

   Route::get('/catalogo', function () {
   return view('catalogo');
   });

   Route::get('/admin', function () {
      return view('admin');
   })->middleware(['auth'])->name('dashboard');
   
   
   Route::get('/adminProdutos', function () {
      return view('adminProdutos');
   })->middleware(['auth'])->name('adminProdutos');


   Route::get('/adminPublicacoes', function () {
      return view('adminPublicacoes');
   })->middleware(['auth'])->name('adminPublicacoes');

   Route::get('/produtos', function () {
      return view('bookProduct');
   })->middleware(['auth']);




   
   Route::get('/adminUsuarios', [\App\Http\Controllers\UserController::class, 'buscarUsuarios']);
   Route::post('/adminProdutos', [\App\Http\Controllers\ProdutosController::class, 'inserir'])->middleware(['auth'])->name('produtos.inserir');
   Route::post('/adminPublicacoes', [\App\Http\Controllers\PublicacoesController::class, 'inserir'])->middleware(['auth'])->name('publicacoes.inserir');
   Route::post('/produtos', [\App\Http\Controllers\ComentariosController::class, 'comentario'])->middleware(['auth'])->name('comentarios.comentario');
   Route::get('/user', [\App\Http\Controllers\UserController::class, 'buscarUsuarios'])->middleware(['auth'])->name('usuarios.buscar');
   Route::get('/adminUsuarios', [\App\Http\Controllers\UserController::class, 'buscarUsuarios']);
   Route::post('', [\App\Http\Controllers\CategoriaController::class, 'categoria'])->middleware(['auth'])->name('inserir.categoria');
   
   // Route::post('/adminProdutos', [\App\Http\Controllers\UploadController::class, 'inserirImagem'])->name('imagem.inserirImagem');
   
   


require __DIR__.'/auth.php';
