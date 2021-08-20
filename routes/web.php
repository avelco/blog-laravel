<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

Route::get('/', [PagesController::class, 'index'])->name('blog.index');

/*Blog resources */
Route::get('blog/category/{slug}', [PagesController::class, 'category'])->name('blog.category');
Route::get('blog/category/all/{slug}', [PagesController::class, 'categoryAll'])->name('blog.category_all');
Route::resource('blog', PagesController::class)->except(['index']);


Route::get('admin', function(){
    return view('admin.dashboard');
});

require __DIR__.'/auth.php';

//Rutas de administración
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    
    Route::resource('posts', PostsController::class);
    
    Route::get('/dashboard', function () {
    return view('admin.dashboard');})->middleware(['auth'])->name('dashboard');

});



