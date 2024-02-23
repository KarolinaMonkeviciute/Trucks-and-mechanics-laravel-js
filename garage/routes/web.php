<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MechanicController AS M;
use App\Http\Controllers\TruckController AS T;
use App\Http\Controllers\CompanyController AS C;


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

Route::prefix('mechanics')->name('mechanics-')->group(function () {
    Route::get('/', [M::class, 'index'])->middleware(['roles:admin|animal|user'])->name('index');
    Route::get('/create', [M::class, 'create'])->middleware(['roles:admin|animal|user'])->name('create');
    Route::post('/', [M::class, 'store'])->middleware(['roles:admin|animal|user'])->name('store');
    Route::get('/{mechanic}', [M::class, 'show'])->middleware(['roles:admin|animal|user'])->name('show');
    Route::get('/{mechanic}/edit', [M::class, 'edit'])->middleware(['roles:admin'])->name('edit');
    Route::put('/{mechanic}', [M::class, 'update'])->middleware(['roles:admin'])->name('update');
    Route::get('/{mechanic}/delete', [M::class, 'delete'])->middleware(['roles:admin'])->name('delete');
    Route::delete('/{mechanic}', [M::class, 'destroy'])->middleware(['roles:admin'])->name('destroy');
});

Route::prefix('trucks')->name('trucks-')->group(function () {
    Route::get('/', [T::class, 'index'])->middleware(['roles:admin|animal|user'])->name('index');
    Route::get('/create', [T::class, 'create'])->middleware(['roles:admin|animal|user'])->name('create');
    Route::post('/', [T::class, 'store'])->middleware(['roles:admin|animal|user'])->name('store');
    Route::get('/{truck}', [T::class, 'show'])->middleware(['roles:admin|animal|user'])->name('show');
    Route::get('/{truck}/edit', [T::class, 'edit'])->middleware(['roles:admin'])->name('edit');
    Route::put('/{truck}', [T::class, 'update'])->middleware(['roles:admin'])->name('update');
    Route::get('/{truck}/delete', [T::class, 'delete'])->middleware(['roles:admin'])->name('delete');
    Route::delete('/{truck}', [T::class, 'destroy'])->middleware(['roles:admin'])->name('destroy');
});

Route::prefix('companies')->name('companies-')->group(function () {
    Route::get('/', [C::class, 'index'])->middleware(['roles:admin|animal|user'])->name('index');
    Route::post('/', [C::class, 'store'])->middleware(['roles:admin|animal|user'])->name('store');
    Route::get('/list', [C::class, 'list'])->middleware(['roles:admin|animal|user'])->name('list');
    Route::get('/{company}/delete', [C::class, 'delete'])->middleware(['roles:admin'])->name('delete');
    Route::delete('/{company}', [C::class, 'destroy'])->middleware(['roles:admin'])->name('destroy');
    Route::get('/{company}/edit', [C::class, 'edit'])->middleware(['roles:admin'])->name('edit');
    Route::put('/{company}', [C::class, 'update'])->middleware(['roles:admin'])->name('update');
    Route::get('/{company}', [C::class, 'show'])->middleware(['roles:admin|animal|user'])->name('show');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
