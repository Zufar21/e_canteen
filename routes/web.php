<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\HomeController;

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

Route::get('/home', [HomeController::class, 'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/produk', [ProdukController::class, 'produk']);
Route::get('/produk/t_produk', [ProdukController::class, 'tambah']);
Route::post('/t_produk/store', [ProdukController::class, 'store']);
//edit
Route::post('/produk/update', [ProdukController::class, 'update']);
Route::get('/produk/e_produk/{id}', [ProdukController::class, 'edit']);
//delete
Route::get('/produk/hapus/{id}', [ProdukController::class, 'hapus']);


Route::get('/supplier', [SupplierController::class, 'supplier']);
Route::get('/supplier/t_supplier', [SupplierController::class, 'tambah']);
Route::post('/t_supplier/store', [SupplierController::class, 'store']);
//edit
Route::post('/supplier/update', [SupplierController::class, 'update']);
Route::get('/supplier/e_supplier/{id}', [SupplierController::class, 'edit']);
//delete
Route::get('/supplier/hapus/{id}', [SupplierController::class, 'hapus']);