<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout.dashboard');
})->name("dashboard");


Route::get('/books', [BookController::class, 'index'])->name("book.index");
Route::get('/create-book', [BookController::class, 'create'])->name("book.create");
Route::post('/create-book', [BookController::class, 'store'])->name("book.store");
Route::get('/book/{id}', [BookController::class, 'show'])->name("book.show");
Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name("book.edit");
Route::put('/book/{id}', [BookController::class, 'update'])->name("book.update");
Route::delete('/book', [BookController::class, 'destroy'])->name("book.destroy");

Route::get('/authors', [AuthorController::class, 'index'])->name("author.index");
Route::get('/create-author', [AuthorController::class, 'create'])->name("author.create");
Route::post('/create-author', [AuthorController::class, 'store'])->name("author.store");
Route::get('/author/{id}', [AuthorController::class, 'show'])->name("author.show");
Route::get('/author/{id}/edit', [AuthorController::class, 'edit'])->name("author.edit");
Route::put('/author/{id}', [AuthorController::class, 'update'])->name("author.update");
Route::delete('/author', [AuthorController::class, 'destroy'])->name("author.destroy");

Route::get('/genres', [GenreController::class, 'index'])->name("genre.index");
Route::get('/create-genre', [GenreController::class, 'create'])->name("genre.create");
Route::post('/create-genre', [GenreController::class, 'store'])->name("genre.store");
Route::get('/genre/{id}', [GenreController::class, 'show'])->name("genre.show");
Route::get('/genre/{id}/edit', [GenreController::class, 'edit'])->name("genre.edit");
Route::put('/genre/{id}', [GenreController::class, 'update'])->name("genre.update");
Route::delete('/genre', [GenreController::class, 'destroy'])->name("genre.destroy");