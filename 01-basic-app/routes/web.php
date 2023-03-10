<?php

use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return 'Home Route';
// });

// Route::get('blog', function () {
//     return 'List';
// });

// Route::get('blog/{slug}', function ($slug) {
//     return $slug;
// });

// Route::get('search', function (Request $request) {
//     return $request->all();
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('blog', function () {
    //Query to DB
    $posts = [
        ['id' => 1, 'title' => 'PHP',     'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];
    return view('blog', ['posts' => $posts]);
})->name('blog');
Route::get('blog/{slug}', function ($slug) {
    // consulta en base de datos con el slug
    $post = $slug;

    return view('post', ['post' => $post]);
})->name('post');