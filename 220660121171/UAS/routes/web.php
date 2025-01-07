<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return redirect()->route('items.index');
});

// Daftar produk
Route::get('items', [ItemController::class, 'index'])->name('items.index');

// Form untuk menambah produk
Route::get('items/create', [ItemController::class, 'create'])->name('items.create');

// Menyimpan produk baru
Route::post('items', [ItemController::class, 'store'])->name('items.store');

// Form untuk mengedit produk
Route::get('items/{id}/edit', [ItemController::class, 'edit'])->name('items.edit');

// Mengupdate produk berdasarkan ID
Route::put('items/{id}', [ItemController::class, 'update'])->name('items.update');

// Menghapus produk
Route::delete('items/{id}', [ItemController::class, 'destroy'])->name('items.destroy');
