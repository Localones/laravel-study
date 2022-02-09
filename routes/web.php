<?php

use App\Http\Controllers\MyPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsContextController;

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
    return view('home');
})->name('home');

//Route::resource('context/', PostsContextController::class);

Route::get('context/', [PostsContextController::class, 'index'])->name('context');
Route::get('context/{id}', [PostsContextController::class, 'show'])->name('context_id');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/my-page', [MyPageController::class, 'index'])->name('my_page');

Route::get('/contact', [MainController::class, 'index'])->name('contact');

Route::get('/page/{slug}', [MainController::class, 'slug'])->name('slug');

/*Route::prefix('posts')->group(function () {
//    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::resource('/', PostController::class);
});
Route::resource('/posts', PostController::class);*/


/*Route::prefix('posts/')->group(function (){

});*/


//Route::get('posts', [PostController::class, 'index'])->name('index');
Route::resource('/posts', PostController::class);
Route::match(['post', 'get'],'/posts/search', [PostController::class, 'search'])->name('search');




/*Route::get('posts/create', [PostController::class, 'create'])->name('create');
Route::post('posts/create/p', [PostController::class, 'store'])->name('store');
Route::get('posts/edit/$id', [PostController::class, 'edit'])->name('edit');

Route::post('posts/delete/$id', [PostController::class, 'destroy'])->name('delete');*/




