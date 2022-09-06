<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcessoController;
use App\Http\Controllers\academia\AcademiaController;

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

Route::get('/', [HomeController::class, 'index'])->name('/home');
Route::post('/user', [HomeController::class, 'store']);
Route::delete('/user/{id}', [HomeController::class, 'destroy']);
Route::get('/log', [HomeController::class, 'create'])->name('/log');

Route::get('/baixar', [HomeController::class, 'baixarCv'])->name('/baixar');

Route::get('/meusprojetos', function(){
    return view('/meusprojetos');
});
Route::get('/portfolio', function(){
    return view('/portfolio');
});
Route::get('/contato', function(){
    return view('/contato');
});

Route::get('/login', [AcessoController::class, 'login'])->name('/login');
// Route::post('/logado', [AcessoController::class, 'store']); //só para add adm

Route::get('/logado', [AcessoController::class, 'index'])->name('/logado');
Route::post('/logado', [AcessoController::class, 'logado'])->name('/logado');


Route::get('/deslogar', [AcessoController::class, 'deslogar'])->name('/deslogar');

//academia

Route::prefix('academia')->group(function () {
    Route::get('/', [AcademiaController::class, 'index'])->name('/academia');
});



