<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index']);

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'show'])->name('login.show');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login.perform');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout']);

Route::get('/', [\App\Http\Controllers\BlogPostController::class, 'index'])->name('pages.blog.index');
Route::get('/contact', [\App\Http\Controllers\BlogPostController::class, 'contact'])->name('pages.contact');
Route::get('/privacypolicy', [\App\Http\Controllers\BlogPostController::class, 'privacypolicy'])->name('pages.privacypolicy');
Route::get('/termsofservice', [\App\Http\Controllers\BlogPostController::class, 'termsofservice'])->name('pages.termsofservice');
Route::get('/disclaimer', [\App\Http\Controllers\BlogPostController::class, 'disclaimer'])->name('pages.disclaimer');
Route::get('/cookiepolicy', [\App\Http\Controllers\BlogPostController::class, 'cookiepolicy'])->name('pages.cookiepolicy');
Route::get('/about', [\App\Http\Controllers\BlogPostController::class, 'about'])->name('pages.about');

Route::get('/categories/{category:name}', [\App\Http\Controllers\CategoryController::class, 'posts']);
Route::get('/search/', 'App\Http\Controllers\BlogPostController@search')->name('search');


Route::get('/{blogPost:slug}', [\App\Http\Controllers\BlogPostController::class, 'show'])->name('pages.blog');
Route::get('/create/post', [\App\Http\Controllers\BlogPostController::class, 'create'])->middleware('auth'); //shows create post form
Route::post('/create/post', [\App\Http\Controllers\BlogPostController::class, 'store'])->name('store_new_post')->middleware('auth'); //saves the created post to the databse
Route::get('/{blogPost:slug}/edit', [\App\Http\Controllers\BlogPostController::class, 'edit'])->middleware('auth'); //shows edit post form
Route::put('/{blogPost:slug}/edit', [\App\Http\Controllers\BlogPostController::class, 'update'])->middleware('auth'); //commits edited post to the database
Route::delete('/{blogPost:slug}', [\App\Http\Controllers\BlogPostController::class, 'destroy']); //deletes post from the database
Route::post('/', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');

Route::get('image-upload', [ App\Http\Controllers\ImageUploadController::class, 'imageUpload' ])->name('image.upload')->middleware('auth');
Route::post('image-upload', [ App\Http\Controllers\ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post')->middleware('auth');






