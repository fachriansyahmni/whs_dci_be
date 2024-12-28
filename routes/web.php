<?php

use App\Http\Controllers\API\RackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__ . '/auth.php';

Route::get('/racks', [RackController::class, 'index'])->name('racks.index');
Route::get('/racks/create', [RackController::class, 'create'])->name('racks.create');
Route::post('/racks', [RackController::class, 'store'])->name('racks.store');
Route::get('/racks/{rack}/edit', [RackController::class, 'edit'])->name('racks.edit');
Route::put('/racks/{rack}', [RackController::class, 'update'])->name('racks.update');
Route::delete('/racks/{rack}', [RackController::class, 'destroy'])->name('racks.destroy');
