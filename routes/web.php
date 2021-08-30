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

Route::get('/', ['as' => 'home', function () {
    return view('pages.home');
}]);

Route::get('/portfolio', ['as' => 'portfolio', function () {
    return view('pages.portfolio');
}]);

Route::get('/contact', ['as' => 'contact', function () {
    return view('pages.contact');
}]);

Route::get('/cv', ['as' => 'contact', function () {
    return view('pages.cv');
}]);

Route::get('/blog', ['as' => 'blog', function () {
    return view('pages.blog');
}]);
Route::group(['namespace' => 'App\Http\Controllers'],function(){

});
