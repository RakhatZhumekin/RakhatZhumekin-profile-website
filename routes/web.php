<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;
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
    return view('main_page');
}) ->name('main_page');

Route::get('/about', function() {
    return view('about');
}) ->name('about');

Route::get('/contacts', function() {
    return view('contacts');
}) ->name('contacts');

Route::get('/post/create', function() {
    DB::table('posts')->insert([
        'title' => 'My submission',
        'body' => 'This submission was done for the course of Back end.'
    ]);
}) -> name('create_post');

Route::get('/post', function() {
    $post = Post::find(1);
    return $post;
}) -> name('post');

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/create', function() {
    return view('blog.create');
});

Route::post('/blog/create', [BlogController::class, 'store'])-> name('add-post');
