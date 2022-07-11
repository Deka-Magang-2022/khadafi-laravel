<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UniversitasController;
use App\Models\Mahasiswa;
use App\Models\Universitas;

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

// Route::get('/mahasiswa', function () {
//     dd(Mahasiswa::all());
//     return view('mahasiswa.index');
// });

Route::prefix('/mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('/index', [MahasiswaController::class, 'index'])->name('index');
    Route::get('/create', [MahasiswaController::class, 'create'])->name('create');
    Route::post('/store', [MahasiswaController::class, 'store'])->name('store');
    Route::get('/edit/{mahasiswa}', [MahasiswaController::class, 'edit'])->name('edit');
    Route::post('/update/{mahasiswa}', [MahasiswaController::class, 'update'])->name('update');
    Route::delete('/delete/{mahasiswa}', [MahasiswaController::class, 'delete'])->name('delete');

 
    
});

Route::prefix('/universitas')->name('universitas.')->group(function () {
    Route::get('/index', [UniversitasController::class, 'index'])->name('index');
    Route::get('/create', [UniversitasController::class, 'create'])->name('create');
    Route::post('/store', [UniversitasController::class, 'store'])->name('store');
    Route::get('/edit/{universitas}', [UniversitasController::class, 'edit'])->name('edit');
    Route::post('/update/{universitas}', [UniversitasController::class, 'update'])->name('update');
    Route::delete('/delete/{universitas}', [UniversitasController::class, 'delete'])->name('delete');
});



