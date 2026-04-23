<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio.home');
})->name('home');

Route::get('/aboutme', function () {
    return view('portfolio.aboutme');
})->name('aboutme');

Route::get('/skills', function () {
    return view('portfolio.skills');
})->name('skills');

Route::get('/projects', function () {
    return view('portfolio.projects');
})->name('projects');

Route::get('/contact', function () {
    return view('portfolio.contact');
})->name('contact');