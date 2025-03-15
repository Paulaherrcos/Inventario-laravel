<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('productos', [ProductoController::class, 'store'])->name('productos.store');  // Usamos 'store' para guardar el producto
Route::get('productos/{id}', [ProductoController::class, 'show']);
Route::put('productos/{id}', [ProductoController::class, 'update'])->name('productos.update');
Route::get('productos/edit/{id}', [ProductoController::class, 'edit'])->name('productos.edit');
Route::delete('productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');


Route::resource('categorias',CategoriaController::class);
Route::put('categorias/{id}',[CategoriaController::class, 'show']);
Route::put('categorias/{id}',[CategoriaController::class, 'edit']);
Route::put('categorias/{id}',[CategoriaController::class, 'update']);


Route::get('proveedores',[ProveedorController::class, 'index'])->name('proveedores.index');
Route::get('proveedores/create',[ProveedorController::class, 'create'])->name('proveedores.create');
Route::post('proveedores', [ProveedorController::class, 'store'])->name('proveedores.store'); 
Route::get('proveedores/{id}',[ProveedorController::class, 'show']);