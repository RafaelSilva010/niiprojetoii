<?php

use App\Models\Category;
use App\Models\Nutritionist;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nutricionistas', function () {
    $nutritionists = Nutritionist::all();
    return view('nutritionists.index', compact(['nutritionists']));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/categories', function () {
    $categories = Category::all();    
    return view('categories.index', compact('categories'));
});