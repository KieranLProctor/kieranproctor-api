<?php

use App\Http\Controllers\v1\ProjectController;
use App\Http\Controllers\v1\BlogPostController;
use App\Http\Controllers\v1\AboutController;
use App\Http\Controllers\v1\StatisticController;
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

Route::redirect('/', '/docs');

Route::prefix('v1')->group(function () {
    Route::get('/projects', [ProjectController::class, 'index']);
    Route::get('/projects/{project}', [ProjectController::class, 'show']);
    Route::get('/projects/{project}/statistics', [ProjectController::class, 'statistics']);

    Route::get('/blog-posts', [BlogPostController::class, 'index']);
    Route::get('/blog-posts/{blogPost}', [BlogPostController::class, 'show']);

    Route::get('/statistics', [StatisticController::class, 'index']);

    Route::get('/about', [AboutController::class, 'index']);
});

require __DIR__ . '/auth.php';
