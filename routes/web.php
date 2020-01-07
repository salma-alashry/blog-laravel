<?php

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

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'auth'],function(){

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
Route::patch('/posts/{post}', 'PostController@update')->name('posts.update');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');

});
/*Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
Route::patch('/posts/{post}', 'PostController@update')->name('posts.update');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*//login with git hub
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
*/
Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider')
    ->name('login.provider')
    ->where('driver', implode('|', config('auth.socialite.drivers')));

    Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback')
    ->name('login.callback')
    ->where('driver', implode('|', config('auth.socialite.drivers')));

?>