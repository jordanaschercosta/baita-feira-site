<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LojaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::resource('users', UserController::class);

Route::get('/cadastro/registrar', [CadastroController::class, 'registrar'])->name('cadastro.registrar');
Route::post('/cadastro/salvar', [CadastroController::class, 'salvar'])->name('cadastro.salvar');

Route::get('/login/entrar', [LoginController::class, 'login'])->name('login.entrar');
Route::post('/login/validar', [LoginController::class, 'validar'])->name('login.validar');

Route::resource('lojas', LojaController::class);

Route::get('/', [LoginController::class, 'login'])->name('login.entrar');

