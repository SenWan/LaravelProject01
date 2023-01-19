<?php

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [HomeController::class, 'about']);

Route::get('/contact', [HomeController::class, '']);

Route::get('/products', [ProductController::class, 'products']);

Route::get('/courses', [CourseController::class, 'all']);
Route::get('/create-course', [CourseController::class, 'create']);
Route::post('/store-course', [CourseController::class, 'store']);


/* Route::get('/news/{category}/{myId}', function ($category, $myId) {
    echo $category;
    echo '<br>';
    echo $myId;
    //return view('others.news');
}); */

Route::get('/news/{category}/{myId}', [NewsController::class, 'news']);