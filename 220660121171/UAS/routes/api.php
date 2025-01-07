<?php

use Illuminate\Support\Facades\Route;
// routes/api.php
use App\Http\Controllers\Api\ItemController;

use App\Http\Controllers\Api\ApiItemController;

Route::prefix('items')->group(function () {
    Route::get('/', [ApiItemController::class, 'index']);       // GET /api/items
    Route::post('/', [ApiItemController::class, 'store']);      // POST /api/items
    Route::get('/{id}', [ApiItemController::class, 'show']);    // GET /api/items/{id}
    Route::put('/{id}', [ApiItemController::class, 'update']);  // PUT /api/items/{id}
    Route::delete('/{id}', [ApiItemController::class, 'destroy']); // DELETE /api/items/{id}
});
