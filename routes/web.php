<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CotxeController;

Route::get('/cotxes', [CotxeController::class, 'index'])->name('cotxes.index');
Route::get('/cotxes/create', [CotxeController::class, 'create'])->name('cotxes.create');
Route::post('/cotxes', [CotxeController::class, 'store'])->name('cotxes.store');
