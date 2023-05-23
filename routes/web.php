<?php

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

use App\Http\Controllers\EntitySocialController;
use App\Http\Controllers\EntityPhysiqueController;

Route::resource('entite_social', EntitySocialController::class);
Route::resource('entite_physique', EntityPhysiqueController::class);
Route::get('/entite_physique/{id}/details', [EntityPhysiqueController::class, 'showDetails'])->name('entite_physique.details');
Route::get('/contrats', [EntityPhysiqueController::class, 'showDetails'])->name('contrats');
 