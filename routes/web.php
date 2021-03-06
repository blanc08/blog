<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContributionController;

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

Route::get('/', [PostController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => 'About me'
    ]);
});

// * Auth
require __DIR__ . '/auth.php';


// * Dashboard -> Authenticated
// ? with prefix
// Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
Route::group(['middleware' => 'auth', 'namespace' => 'App\Http\Controllers\Dashboard'], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/ManagePosts', DashboardPostController::class);

});


Route::get('/contributions', [ContributionController::class, 'index']);

Route::get('/contributions/{contribution:slug}', [ContributionController::class, 'show']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);
