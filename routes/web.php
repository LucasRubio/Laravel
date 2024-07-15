<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return 'Laravel Class!';
});*/

Route::get('/', [PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobreNos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/login', function () {return 'Login Class!';});


Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {return 'Clientes Class!';})->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedoresController::class,'index'])->name('app.fornecedores');
    Route::get('/produtos', function () {return 'Produtos Class!';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class,'teste'])->name('teste');

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a>';
});