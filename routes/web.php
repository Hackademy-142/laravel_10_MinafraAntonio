<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'home'])->name('home');

Route::get('/index', [ArticleController::class, 'index'])->name('index');

Route::get('/create', [ArticleController::class, 'create'])->name('article.create');

Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

//rotta parametrica articoli
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

//rotta per il put degli articoli
Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');

Route::put('article/update/{article}', [ArticleController::class, 'update'])->name('article.update');

//rotta per il delete dell'articolo
Route::delete('article/destroy/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');