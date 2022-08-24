<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcessoController;

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

Route::get('/', [HomeController::class, 'index']);
Route::post('/user', [HomeController::class, 'store']);
Route::delete('/user/{id}', [HomeController::class, 'destroy']);
Route::get('/log', [HomeController::class, 'create'])->name('/log');

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
// Route::post('/logando', [AcessoController::class, 'store']); //só para add adm
Route::post('/logado', [AcessoController::class, 'logado'])->name('/logado');
Route::get('/logado', [AcessoController::class, 'index'])->name('/logado');



