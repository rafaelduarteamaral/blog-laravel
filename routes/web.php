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

Route::any('/pesquisar', [\App\Http\Controllers\ProdutosController::class, 'Pesquisar'])->name('produtos.pesquisa');
Route::any('/pesquisar', [\App\Http\Controllers\ProdutosController::class, 'Pesquisar'])->name('produtos.pesquisa');

Route::get('/editar_publicacao/{id}', [\App\Http\Controllers\PublicacoesController::class, 'editPub'])->middleware(['auth'])->name('editarPub.buscar');
Route::get('/editar/{id}', [\App\Http\Controllers\ProdutosController::class, 'edit'])->middleware(['auth'])->name('editar.buscar');
Route::get('/adminUsuarios', [\App\Http\Controllers\UserController::class, 'buscarUsuarios']);
Route::get('/produtos_cadastrados', [\App\Http\Controllers\ProdutosController::class, 'buscarProdutosTabela'])->middleware(['auth'])->name('produtos.buscar');
Route::get('/produtos/{id}', [\App\Http\Controllers\ProdutosController::class, 'getProduto'])->middleware(['auth'])->name('produto.buscar');
Route::get('/user', [\App\Http\Controllers\UserController::class, 'buscarUsuarios'])->middleware(['auth'])->name('usuarios.buscar');
Route::get('/catalogo', [\App\Http\Controllers\ProdutosController::class, 'buscarProdutos'])->middleware(['auth'])->name('produtos.buscar');
Route::get('/categoria/{id}', [\App\Http\Controllers\CategoriaController::class, 'selectCategoria'])->middleware(['auth'])->name('categoria.buscar');
Route::get('/usuarioPerfil', [\App\Http\Controllers\UserController::class, 'getUsuarios'])->middleware(['auth'])->name('usuario.atualizar');
Route::get('/', [\App\Http\Controllers\PublicacoesController::class, 'getPublicacoes'])->middleware(['auth'])->name('publicacoes.buscar');
Route::get('/publicacoes_cadastradas', [\App\Http\Controllers\PublicacoesController::class, 'buscarPublicacoesTabela'])->middleware(['auth'])->name('publicacoes.buscar');

Route::post('/editar_publicacao/{id}', [\App\Http\Controllers\PublicacoesController::class, 'updatePub'])->middleware(['auth'])->name('editarPub.update');
Route::post('/editar/{id}', [\App\Http\Controllers\ProdutosController::class, 'update'])->middleware(['auth'])->name('editar.update');
Route::post('/admin_produtos', [\App\Http\Controllers\ProdutosController::class, 'inserir'])->middleware(['auth'])->name('produtos.inserir');
Route::post('/admin_publicacoes', [\App\Http\Controllers\PublicacoesController::class, 'inserir'])->middleware(['auth'])->name('publicacoes.inserir');
Route::post('/produtos', [\App\Http\Controllers\ComentariosController::class, 'comentario'])->middleware(['auth'])->name('comentarios.comentario');
Route::post('', [\App\Http\Controllers\CategoriaController::class, 'categoria'])->middleware(['auth'])->name('inserir.categoria');
Route::post('/usuarioPerfil/', [\App\Http\Controllers\UserController::class, 'updateUsuarios'])->middleware(['auth'])->name('usuario.atualizar');

Route::delete('/produtos_cadastrados/{id}', [\App\Http\Controllers\ProdutosController::class, 'deletarProduto'])->middleware(['auth'])->name('excluir.produto');
Route::delete('/publicacoes_cadastradas/{id}', [\App\Http\Controllers\PublicacoesController::class, 'deletarPublicacao'])->middleware(['auth'])->name('excluir.publicacoes');

require __DIR__ . '/auth.php';

// Route::get('', [\App\Http\Controllers\CategoriaController::class, 'getCategoria'])->middleware(['auth'])->name('categoria.categoria');
// Route::post('/comentarios', [\App\Http\Controllers\ComentariosController::class, 'curtidas'])->middleware(['auth'])->name('curtidas.inserir');
// Route::get('/catalogo', [\App\Http\Controllers\CategoriaController::class, 'buscarUsuarios'])->middleware(['auth'])->name('visualizar.categoria');