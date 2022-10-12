<?php

use App\Http\Controllers\ContributionController;
use App\Http\Controllers\Dashboard\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    $posts = Post::all();
    return Inertia::render('Post/Index', ['posts' => $posts]);
    // return Inertia::render('Welcome', [
    //     'canLogin' => Route::has('login'),
    //     'canRegister' => Route::has('register'),
    //     'laravelVersion' => Application::VERSION,
    //     'phpVersion' => PHP_VERSION,
    // ]);
});

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/contributions', [ContributionController::class, 'index']);

Route::get('/contributions/{contribution:slug}', [ContributionController::class, 'show']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => 'About me'
    ]);
});

// * Dashboard -> Authenticated
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/manage-posts', DashboardPostController::class);
});

require __DIR__ . '/auth.php';
