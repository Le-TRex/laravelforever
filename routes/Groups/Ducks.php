<?php

use App\Http\Controllers\DuckController;
use Illuminate\Support\Facades\Route;

Route::prefix('/ducks')->group(function (){
    Route::get('/', [DuckController::class, 'ducks'])->name('ducks');

    Route::get('/create', [DuckController::class, 'createDuck'])->name('createDuck');
    Route::post('/create', [DuckController::class, 'createDuckPost'])->name('createDuckPost');

    Route::get('/{duck:id}', [ DuckController::class, 'updateDuck' ])->name('updateDuck');
    Route::patch('/{duck:id}', [ DuckController::class, 'updateDuckPost' ])->name("updateDuck");

    Route::delete('/{duck:id}', [DuckController::class, 'deleteDuck'])->name('deleteDuck');
});
