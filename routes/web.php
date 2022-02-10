<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\Dashboard\GuruController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->name('dashboard')->prefix('dashboard')->group(function(){
    Route::get('/', function(){
        return view('dashboard.index');
    });

    Route::get('/guru', [GuruController::class, 'index'])->name('.guru');

    Route::get('/materi', function(){
        return view('dashboard.materi');
    })->name('.materi');
});

Route::get('materi', [MateriController::class, 'index'])->name('materi');

require __DIR__.'/auth.php';
