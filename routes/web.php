<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Livewire\Carros\CarrosCreate;
use App\Http\Livewire\Carros\CarrosDelete;
use App\Http\Livewire\Carros\CarrosEdit;
use App\Http\Livewire\Carros\CarrosIndex;
use App\Http\Livewire\Carros\CarrosShow;
use App\Http\Livewire\PruebaIndex;
use App\Http\Livewire\Usuarios\CreateUsuario;
use App\Http\Livewire\Usuarios\DeleteUsuario;
use App\Http\Livewire\Usuarios\EditUsuario;
use App\Http\Livewire\Usuarios\IndexUsuario;
use App\Http\Livewire\Usuarios\ShowUsuario;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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


//Route::get('/usuarios', [UsuarioController::class, 'index']);

//Route::get('/usuarios/crear', [UsuarioController::class, 'create']);

Route::get('/carros', CarrosIndex::class)->name('carros.index');

Route::get('/carros/create', CarrosCreate::class)->name('carros.create');

Route::get('/carros/{carro}/edit', CarrosEdit::class)->name('carros.edit');

Route::get('/carros/{carro}/delete', CarrosDelete::class)->name('carros.delete');

Route::get('/carros/{carro}/show', CarrosShow::class)->name('carros.show');


Route::get('/usuarios', IndexUsuario::class)->name('users.index');

Route::get('usuarios/create', CreateUsuario::class)->name('users.create');

Route::get('/usuarios/{usuario}/delete', DeleteUsuario::class)->name('users.delete');

Route::get('/usuarios/{usuario}/edit', EditUsuario::class)->name('users.edit');

Route::get('/usuarios/{usuario}/show', ShowUsuario::class)->name('users.show');
