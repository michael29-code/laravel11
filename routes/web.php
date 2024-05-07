<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about',['nama' => 'Michael', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Michael',
            'Body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis doloremque deserunt excepturi nemo
            soluta corporis ratione unde tempora laborum harum?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Michael',
            'Body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, aliquam vel accusantium exercitationem
            cupiditate iure? Optio fuga, doloribus necessitatibus voluptatibus tempora dicta, provident aspernatur culpa
            ab ex consequatur magnam harum!'
        ],
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Michael',
            'Body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis doloremque deserunt excepturi nemo
            soluta corporis ratione unde tempora laborum harum?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Michael',
            'Body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, aliquam vel accusantium exercitationem
            cupiditate iure? Optio fuga, doloribus necessitatibus voluptatibus tempora dicta, provident aspernatur culpa
            ab ex consequatur magnam harum!'
        ],
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post',['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});


