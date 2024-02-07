<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/skills', function () {
    return view('pages.skills');
})->name('skills');
Route::get('/project', function () {
    return view('pages.project');
})->name('project');
Route::get('/pricing', function () {
    return view('pages.pricing');
})->name('pricing');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
