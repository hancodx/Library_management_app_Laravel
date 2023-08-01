<?php

use App\Http\Controllers\EquipeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/home', [HomeController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/membres', [MembreController::class, 'index'])->name('membres.index');
    Route::get('/addmembre', [MembreController::class, 'create'])->name('addmembre');

    // members page
    Route::get('/members', [MembreController::class, 'index'])->name('members');
    Route::delete('/members/{member}', [MembreController::class, 'destroy'])->name('members.destroy');
    Route::post('/members', [App\Http\Controllers\MembreController::class, 'store'])->name('members.store');
    Route::get('/members/create', [App\Http\Controllers\MembreController::class, 'create'])->name('members.create');



    // equipes page
    Route::get('/equipes', [EquipeController::class, 'index'])->name('equipes');
    Route::delete('/equipes/{equipe}', [EquipeController::class, 'destroy'])->name('equipes.destroy');
    Route::post('/equipes', [App\Http\Controllers\EquipeController::class, 'store'])->name('equipes.store');
    Route::get('/equipes/create', [App\Http\Controllers\EquipeController::class, 'create'])->name('equipes.create');

    // Projets page
    Route::get('/projets', [App\Http\Controllers\ProjetController::class, 'index'])->name('projets');
    Route::delete('/projets/{projet}', [App\Http\Controllers\ProjetController::class, 'destroy'])->name('projets.destroy');
    Route::post('/projets', [App\Http\Controllers\ProjetController::class, 'store'])->name('projects.store');
    Route::get('/projects/create', [App\Http\Controllers\ProjetController::class, 'create'])->name('projects.create');

    //Route::get('/addprojet', [ProjectController::class, 'showform'])->name('addprojet');






});

require __DIR__.'/auth.php';
