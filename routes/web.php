<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/projects', 'projects');

Route::view('/apiShowcase', 'apiShowcase');

Route::view('/about', 'about');

Route::view('/contact', 'contact');