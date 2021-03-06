<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;
use App\Models\Profile;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\LangController;
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
//     return view('main_page');
// }) ->name('main_page');

Route::get('/main/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('main_page');
}) ->name('main_page');

Route::get('/about/{lang}', function($lang) {
    App::setlocale($lang);
    return view('about');
}) ->name('about');

Route::get('/contacts/{lang}', function($lang) {
    App::setlocale($lang);
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

Route::get('/post/{id}', [BlogController::class, 'get_post']);

Route::get('/profiles', [ProfileController::class, 'index']);

Route::get('/profiles/create', function() {
    return view('profiles.create_profile');
});

Route::post('/profiles/create', [ProfileController::class, 'store'])-> name('add-profile');

Route::get('mail/send', [MailController::class, 'send']);
