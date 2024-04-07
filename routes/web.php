<?php

use App\Http\Controllers\{HistoryTaskStatusController, TodoController};
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index']);
Route::get('/history', HistoryTaskStatusController::class);

Route::post('/', [TodoController::class, 'store']);
Route::get('/{todo}', [TodoController::class, 'show'])->where(['todo' => '[0-9]+']);
Route::delete('/{todo}', [TodoController::class, 'destroy'])->where(['todo' => '[0-9]+']);
Route::put('/{todo}', [TodoController::class, 'update'])->where(['todo' => '[0-9]+']);

Route::get('/add', [TodoController::class, 'create']);
Route::get('/edit/{todo}', [TodoController::class, 'edit'])->where(['todo' => '[0-9]+']);
