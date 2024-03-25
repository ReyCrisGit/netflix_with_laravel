<?php

use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfiles', [PerfilController::class, 'index'])->name('perfil.index');
Route::get('/perfiles/create', [PerfilController::class, 'create'])->name('perfil.create');
Route::post('/perfiles/store', [PerfilController::class, 'store'])->name('perfiles.store');
Route::get('/perfiles/{id}/edit', [PerfilController::class, 'edit'])->name('perfiles.edit');
Route::put('/perfiles/{id}/update', [PerfilController::class, 'update'])->name('perfiles.update');
Route::get('/perfiles/{id}/view', [PerfilController::class, 'show'])->name('perfiles.view');
Route::delete('/perfiles/{id}/delete', [PerfilController::class, 'destroy'])->name('perfiles.destroy');

Route::get('/series', [SerieController::class, 'index'])->name('serie.index');
//Route::get('/perfiles/create', [PerfilController::class, 'create'])->name('perfil.create');
//Route::post('/perfiles/store', [PerfilController::class, 'store'])->name('perfiles.store');
//Route::get('/perfiles/{id}/edit', [PerfilController::class, 'edit'])->name('perfiles.edit');
//Route::put('/perfiles/{id}/update', [PerfilController::class, 'update'])->name('perfiles.update');
Route::get('/series/{id}/view', [SerieController::class, 'show'])->name('series.view');
//Route::delete('/perfiles/{id}/delete', [PerfilController::class, 'destroy'])->name('perfiles.destroy');
Route::get('/series/search', [SerieController::class, 'search'])->name('series.search');

Route::get('/peliculas', [PeliculaController::class, 'index'])->name('pelicula.index');
//Route::get('/perfiles/create', [PerfilController::class, 'create'])->name('perfil.create');
//Route::post('/perfiles/store', [PerfilController::class, 'store'])->name('perfiles.store');
//Route::get('/perfiles/{id}/edit', [PerfilController::class, 'edit'])->name('perfiles.edit');
//Route::put('/perfiles/{id}/update', [PerfilController::class, 'update'])->name('perfiles.update');
Route::get('/peliculas/{id}/view', [PeliculaController::class, 'show'])->name('peliculas.view');
//Route::delete('/perfiles/{id}/delete', [PerfilController::class, 'destroy'])->name('perfiles.destroy');
Route::get('/peliculas/search', [PeliculaController::class, 'search'])->name('peliculas.search');

Route::get('/notificaciones', [NotificacionController::class, 'index'])->name('notificaciones.index');
//Route::get('/perfiles/create', [PerfilController::class, 'create'])->name('perfil.create');
//Route::post('/perfiles/store', [PerfilController::class, 'store'])->name('perfiles.store');
//Route::get('/perfiles/{id}/edit', [PerfilController::class, 'edit'])->name('perfiles.edit');
//Route::put('/perfiles/{id}/update', [PerfilController::class, 'update'])->name('perfiles.update');
Route::get('/notificaciones/{id}/view', [NotificacionController::class, 'show'])->name('notificaciones.view');
//Route::delete('/perfiles/{id}/delete', [PerfilController::class, 'destroy'])->name('perfiles.destroy');
//Route::get('/peliculas/search', [PeliculaController::class, 'search'])->name('peliculas.search');