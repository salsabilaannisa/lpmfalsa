<?php

use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardCategoriesController;

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
    $category = Category::first()->slug;
    return redirect('/posts?category='.$category);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Annisa Salsabila",
        "email" => "salsabilaannisa09@gmail.com",
        "image" => "annisa.jpg",
        "mycategory" => Category::all()
    ]);
});



Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/{category:slug}', [CategoriesController::class, 'show']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store'])->middleware('auth');
Route::get('/register/list', [RegisterController::class, 'list'])->middleware('auth');
Route::post('/register/confirm/{user:username}/{val}', [RegisterController::class, 'confirm'])->middleware('auth');

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::post('/dashboard/posts/confirm/{post:slug}/{val}', [DashboardPostController::class, 'confirm'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/dashboard/categories/checkSlug', [DashboardCategoriesController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/categories', DashboardCategoriesController::class)->middleware('auth');