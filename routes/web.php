<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/login', [HomeController::class, 'create'])->name('/login');

Route::get('/meusprojetos', function(){
    return view('/meusprojetos');
});
Route::get('/portfolio', function(){
    return view('/portfolio');
});
Route::get('/contato', function(){
    return view('/contato');
});


