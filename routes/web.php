<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[BlogController::class, 'index']);
Route::get('/{blog}',[BlogController::class, 'blog'])->name('blog');
Route::get('/{blog}/edit',[BlogController::class, 'edit'])->name('edit');
Route::post('/{blog}/edit/save',[BlogController::class, 'editSave'])->name('edit.save');
Route::get('/{blog}/delete',[BlogController::class, 'delete'])->name('delete');
Route::get('/create',[BlogController::class, 'create'])->name('create');
Route::post('/store',[BlogController::class, 'store'])->name('store');


