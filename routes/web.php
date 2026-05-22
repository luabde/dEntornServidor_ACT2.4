<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CotxeController;

// El name es el nom de la ruta que s'utilitzarà en la vista per a cridar a la ruta

Route::get('/cotxes', [CotxeController::class, 'index'])->name('cotxes.index');
Route::get('/cotxes/create', [CotxeController::class, 'create'])->name('cotxes.create');
Route::post('/cotxes', [CotxeController::class, 'store'])->name('cotxes.store');
Route::delete('/cotxes/{cotxe}', [CotxeController::class, 'destroy'])->name('cotxes.destroy');
