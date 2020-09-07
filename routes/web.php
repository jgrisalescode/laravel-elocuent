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

use App\Post; // I need use Post model

Route::get('/eloquent', function () {
    // Geting all the post in the Data Base
    // $posts = Post::all();

    // Example of curstom query
    $posts = Post::where('id', '>=', '20')
        ->orderBy('id', 'desc')
        ->take(3)
        ->get();
    foreach ($posts as $post) {
        echo "$post->id $post->title <br/>";
    }
});
