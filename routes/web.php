<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ModeController;
use App\Http\Controllers\BugController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
});

Route::prefix('classes')->group(function () {
    Route::get('/', [ClassController::class, 'index'])->name('classes.index');
    Route::get('/{id}', [ClassController::class, 'show'])->name('classes.show');
    Route::get('/create', [ClassController::class, 'create'])->name('classes.create');
    Route::post('/', [ClassController::class, 'store'])->name('classes.store');
    Route::get('/{id}/edit', [ClassController::class, 'edit'])->name('classes.edit');
    Route::put('/{id}', [ClassController::class, 'update'])->name('classes.update');
    Route::delete('/{id}', [ClassController::class, 'destroy'])->name('classes.destroy');
});

// Маршруты для предметов
Route::prefix('items')->group(function () {
    Route::get('/', [ItemController::class, 'index'])->name('items.index'); // Список всех предметов
    Route::get('/{id}', [ItemController::class, 'show'])->name('items.show'); // Просмотр одного предмета
    Route::get('/create', [ItemController::class, 'create'])->name('items.create'); // Форма создания предмета
    Route::post('/', [ItemController::class, 'store'])->name('items.store'); // Сохранение предмета
    Route::get('/{id}/edit', [ItemController::class, 'edit'])->name('items.edit'); // Форма редактирования предмета
    Route::put('/{id}', [ItemController::class, 'update'])->name('items.update'); // Обновление предмета
    Route::delete('/{id}', [ItemController::class, 'destroy'])->name('items.destroy'); // Удаление предмета
});

// Маршруты для игровых режимов
Route::prefix('modes')->group(function () {
    Route::get('/', [ModeController::class, 'index'])->name('modes.index'); // Список всех режимов
    Route::get('/{id}', [ModeController::class, 'show'])->name('modes.show'); // Просмотр одного режима
    Route::get('/create', [ModeController::class, 'create'])->name('modes.create'); // Форма создания режима
    Route::post('/', [ModeController::class, 'store'])->name('modes.store'); // Сохранение режима
    Route::get('/{id}/edit', [ModeController::class, 'edit'])->name('modes.edit'); // Форма редактирования режима
    Route::put('/{id}', [ModeController::class, 'update'])->name('modes.update'); // Обновление режима
    Route::delete('/{id}', [ModeController::class, 'destroy'])->name('modes.destroy'); // Удаление режима
});
