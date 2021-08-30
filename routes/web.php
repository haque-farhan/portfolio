<?php

use Illuminate\Support\Facades\Route;


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
