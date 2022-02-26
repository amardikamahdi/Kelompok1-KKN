<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MateriController as MateriController;
use App\Http\Controllers\Dashboard\MateriController as DashboardMateriController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->name('dashboard')->prefix('dashboard')->group(function(){
    Route::get('/', function(){
        return view('dashboard.index');
    });

    Route::get('/guru', [GuruController::class, 'index'])->name('.guru');

    Route::prefix('materi')->name('.materi')->group(function(){
        Route::get('/', [DashboardMateriController::class, 'index'])->name('.index');
        Route::get('/materi/add', [DashboardMateriController::class, 'addMateri'])->name('.add');
        Route::post('/materi/create', [DashboardMateriController::class, 'createMateri'])->name('.create');
    });
});

Route::get('materi', [MateriController::class, 'index'])->name('indexMateri');
Route::get('materi/detail/{materiId}', [MateriController::class, 'detailMateri'])->name('detailMateri');
Route::get('materi/{classId}/{themeId}', [MateriController::class, 'findMateri'])->name('findMateri');

require __DIR__.'/auth.php';
