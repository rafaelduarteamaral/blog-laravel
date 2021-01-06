<?php

use Illuminate\Support\Facades\Route;


Route::get('/catalogo', function () {
   return view('catalogo');
});

Route::get('/admin', function () {
   return view('admin');
})->middleware(['auth'])->name('dashboard');




Route::get('/admin_produtos', function () {
   return view('admin_produtos');
})->middleware(['auth'])->name('adminProdutos');


Route::get('/adminPublicacoes', function () {
   return view('admin_publicacoes');
})->middleware(['auth'])->name('adminPublicacoes');

Route::get('/produtos', function () {
   return view('produtos');
})->middleware(['auth']);

Route::get('/adminUsuarios', [\App\Http\Controllers\UserController::class, 'buscarUsuarios']);
Route::post('/admin_produtos', [\App\Http\Controllers\ProdutosController::class, 'inserir'])->middleware(['auth'])->name('produtos.inserir');
// Route::get('', [\App\Http\Controllers\CategoriaController::class, 'getCategoria'])->middleware(['auth'])->name('categoria.categoria');
Route::get('/produtos_cadastrados', [\App\Http\Controllers\ProdutosController::class, 'buscarProdutosTabela'])->middleware(['auth'])->name('produtos.buscar');
Route::post('/admin_publicacoes', [\App\Http\Controllers\PublicacoesController::class, 'inserir'])->middleware(['auth'])->name('publicacoes.inserir');
Route::post('/produtos', [\App\Http\Controllers\ComentariosController::class, 'comentario'])->middleware(['auth'])->name('comentarios.comentario');
Route::get('/produtos/{id}', [\App\Http\Controllers\ProdutosController::class, 'getProduto'])->middleware(['auth'])->name('produto.buscar');
Route::get('/user', [\App\Http\Controllers\UserController::class, 'buscarUsuarios'])->middleware(['auth'])->name('usuarios.buscar');
Route::post('', [\App\Http\Controllers\CategoriaController::class, 'categoria'])->middleware(['auth'])->name('inserir.categoria');
Route::get('/catalogo', [\App\Http\Controllers\ProdutosController::class, 'buscarProdutos'])->middleware(['auth'])->name('produtos.buscar');
Route::get('/categoria/{id}', [\App\Http\Controllers\CategoriaController::class, 'selectCategoria'])->middleware(['auth'])->name('categoria.buscar');
// Route::post('/comentarios', [\App\Http\Controllers\ComentariosController::class, 'curtidas'])->middleware(['auth'])->name('curtidas.inserir');
// Route::get('/catalogo', [\App\Http\Controllers\CategoriaController::class, 'buscarUsuarios'])->middleware(['auth'])->name('visualizar.categoria');
Route::get('/usuarioPerfil', [\App\Http\Controllers\UserController::class, 'getUsuarios'])->middleware(['auth'])->name('usuario.atualizar');
Route::post('/usuarioPerfil/', [\App\Http\Controllers\UserController::class, 'updateUsuarios'])->middleware(['auth'])->name('usuario.atualizar');
Route::get('/', [\App\Http\Controllers\PublicacoesController::class, 'getPublicacoes'])->middleware(['auth'])->name('publicacoes.buscar');
Route::delete('/produtos_cadastrados/{id}', [\App\Http\Controllers\ProdutosController::class, 'deletarProduto'])->middleware(['auth'])->name('excluir.produto');
Route::get('/publicacoes_cadastradas', [\App\Http\Controllers\PublicacoesController::class, 'buscarPublicacoesTabela'])->middleware(['auth'])->name('publicacoes.buscar');
Route::delete('/publicacoes_cadastradas/{id}', [\App\Http\Controllers\PublicacoesController::class, 'deletarPublicacao'])->middleware(['auth'])->name('excluir.publicacoes');
require __DIR__ . '/auth.php';