<?php

use App\Http\Controllers\NotificacaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/test', [TesteController::class, 'index'] );
    Route::get('/notificacao', [NotificacaoController::class, 'index'] );
});

Route::get('/test2', function () {
    return view('teste');
});
Auth::routes();

//Route::get('/adicionar', [FornecedorController::class, 'formFornecedores'])->name('add-fornecedor');
