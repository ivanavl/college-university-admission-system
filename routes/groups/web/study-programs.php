<?php

use App\Http\Controllers\StudyProgramController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')
    ->name('study-programs.')
    ->prefix('/study-programs')
    ->group(function () {

        //  Index
        Route::name('index')
            ->get('/', [StudyProgramController::class, 'index']);

        //  Datatables
        Route::name('datatables')
            ->get('/datatables', [StudyProgramController::class, 'datatables']);

        //  Fetch
        Route::name('fetch')
            ->get('/{faculty}/fetch', [StudyProgramController::class, 'fetch']);

        //  Search
        Route::name('search')
            ->get('/search', [StudyProgramController::class, 'search']);
    });