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

Route::get('/', [BlogController::class, 'index'])->name('blog.index');

/*Blog resources */
Route::get('blog/category/{slug}', [BlogController::class, 'category'])->name('blog.category');
Route::get('blog/category/all/{slug}', [BlogController::class, 'categoryAll'])->name('blog.category_all');
Route::resource('blog', BlogController::class)->except([
    'index'
]);
