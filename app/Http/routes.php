<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('api/blogs', function() {
    return App\Blog::latest()->get();
});

Route::get('api/blog/{id}', function($id) {
    return App\Blog::findOrFail($id);
});

Route::post('api/createBlog', function() {
    // Need some backend validation but this is fine for now.
    App\Blog::create(Request::all());
});

Route::get('/', function () {
    return view('master');
});
