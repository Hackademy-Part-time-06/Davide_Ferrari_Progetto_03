<?php

use App\Http\Controllers\PageController;
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


Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [PageController::class, 'chisiamo'])->name('chisiamo');

Route::get('/contatti', [PageController::class, 'contatti'])->name('contatti');

Route::get('/details/{ref}', [PageController::class, 'dettaglivolo'])->name('dettaglivolo');
