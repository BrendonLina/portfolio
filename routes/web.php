<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcessoController;
use App\Http\Controllers\consultorio\ConsultorioController;

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
Route::post('/logado', [AcessoController::class, 'logado'])->name('/logado'); //desabilitar quando /logado metodo store estiver habilitado


Route::get('/deslogar', [AcessoController::class, 'deslogar'])->name('/deslogar');

//consultorio ADM
Route::prefix('consultorio/adm')->group(function () {
    Route::get('/', [ConsultorioController::class, 'login'])->name('/consultorio/adm/login');
    Route::get('/dash-adm', [ConsultorioController::class, 'verificaSessao'])->name('/dash-adm');
    Route::post('/dash-adm', [ConsultorioController::class, 'logado'])->name('/dash-adm'); //desabilitar para add adm do consultorio
    // Route::post('/dash-adm', [ConsultorioController::class, 'store'])->name('/dash-adm-store'); //habilitar pra add adm do consultorio
    Route::get('/deslogarAdm', [ConsultorioController::class, 'deslogarAdm'])->name('/deslogarAdm');
    Route::get('/clinica', [ConsultorioController::class, 'clinica'])->name('/clinica');
    Route::post('/clinica', [ConsultorioController::class, 'clinicaPost'])->name('/clinica');
    Route::get('/medico', [ConsultorioController::class, 'medico'])->name('/medico');
    Route::delete('/medico/{id}', [ConsultorioController::class, 'reprovar']);
});

//consultório
Route::prefix('consultorio')->group(function () {
    Route::get('/', [ConsultorioController::class, 'index'])->name('/consultorio');
    Route::get('/agendamento', [ConsultorioController::class, 'agendamento'])->name('/agendamento');
    Route::post('/agendamento', [ConsultorioController::class, 'agendamentoPost'])->name('/agendamento');
    Route::get('/areadomedico', [ConsultorioController::class, 'areadomedico'])->name('/areadomedico');
    Route::post('/areadomedico', [ConsultorioController::class, 'areadomedicoPost'])->name('/areadomedico');
    Route::get('/cadastro', [ConsultorioController::class, 'cadastro'])->name('/cadastro');
    Route::post('/cadastro', [ConsultorioController::class, 'cadastroPost'])->name('/cadastro');

});



