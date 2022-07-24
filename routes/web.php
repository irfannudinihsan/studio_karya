<?php

use App\Http\Controllers\DashboardKaryaController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\User;
use App\Models\Karya;
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



//home
Route::get('/', function () {

    return view('/home', [

        'title' => 'home',
        'active' => 'home',
    ]);
});
Route::get('/home', function () {

    return view('/home', [

        'title' => 'home',
        'active' => 'home',
    ]);
});

//karya
Route::get('/karyas', [KaryaController::class, 'index']);
Route::get('/karyas/{karya:slug}', [KaryaController::class, 'show']);


//
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [

        'title' => $category->nama,
        'karyas' => $category->karyas,
        'category' => $category->nama,
    ]);
});

Route::get('/categories', function () {

    return view('categories', [
        'title' => 'Karya Categories',
        'categories' => Category::all(),
    ]);
});


//users
Route::get('users', function () {

    return view('users', [
        'title' => 'seniman',
        'users' => User::all(),
    ]);
});

Route::get('/users/{user:slug}', function (User $user) {
    return view('user', [

        'title' => $user->nama,
        'user' => $user,
    ]);
});

Route::get('/userkarya/{user:slug}', function (User $user) {
    return view('userkarya', [

        'title' => $user->nama,
        'karyas' => $user->karyas,
    ]);
});


//login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//logout
Route::post('/logout', [LoginController::class, 'logout']);

//register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard', function () {

    return view('dashboard.index', [
        'categories' => Category::all(),
        'users' => User::all(),
    ]);
});


//dashboard resource
Route::resource('/dashboard/karyas', DashboardKaryaController::class)->middleware('auth');


Route::get('/dashboard/karya/checkSlug', [DashboardKaryaController::class, 'checkSlug'])->middleware('auth');
