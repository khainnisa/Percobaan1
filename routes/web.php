<?php

use App\Models\Blog;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/table', function () {
    return view('components.table');
});

Route::get('/form', function() {
    return view('components.form');
});

// Route::get('/blog', function() {
//     return view('components.blog', ['nama' => "nisa", 'jabatan' => "dokter", 'tanggal' => "12 Mar 2019"]);
// });


Route::get('/blog', function() {
    return view('components.blog', ['blogs' => Blog::all()]);
});

Route::get('/article', function() {
    return view('components.article', ['articles' => Article::all()]);
});

