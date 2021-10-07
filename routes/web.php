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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fauzan Nursalma",
        "email" => "193040053@mail.unpas.ac.id",
        "image" => "fauzann.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fauzan Nursalma",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias aperiam odio nihil repudiandae distinctio inventore omnis nesciunt eius! Commodi deserunt non nemo voluptatibus hic at accusamus saepe quam labore, dolores autem, aliquid mollitia debitis qui veniam, fugit quos expedita nam deleniti repellat aperiam illo nihil recusandae modi. Voluptatum voluptate, quas praesentium iste ratione deleniti nobis odit odio dolores rerum. Ratione consequatur, iusto dolorum, quidem ipsum provident illum natus aspernatur qui fugit expedita adipisci cum necessitatibus eaque atque eveniet ut perspiciatis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Herlan Nuryana",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias aperiam odio nihil repudiandae distinctio inventore omnis nesciunt eius! Commodi deserunt non nemo voluptatibus hic at accusamus saepe quam labore, dolores autem, aliquid mollitia debitis qui veniam, fugit quos expedita nam deleniti repellat aperiam illo nihil recusandae modi. Voluptatum voluptate, quas praesentium iste ratione deleniti nobis odit odio dolores rerum. Ratione consequatur, iusto dolorum, quidem ipsum provident illum natus aspernatur qui fugit expedita adipisci cum necessitatibus eaque atque eveniet ut perspiciatis."
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman Single Post

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fauzan Nursalma",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias aperiam odio nihil repudiandae distinctio inventore omnis nesciunt eius! Commodi deserunt non nemo voluptatibus hic at accusamus saepe quam labore, dolores autem, aliquid mollitia debitis qui veniam, fugit quos expedita nam deleniti repellat aperiam illo nihil recusandae modi. Voluptatum voluptate, quas praesentium iste ratione deleniti nobis odit odio dolores rerum. Ratione consequatur, iusto dolorum, quidem ipsum provident illum natus aspernatur qui fugit expedita adipisci cum necessitatibus eaque atque eveniet ut perspiciatis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Herlan Nuryana",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias aperiam odio nihil repudiandae distinctio inventore omnis nesciunt eius! Commodi deserunt non nemo voluptatibus hic at accusamus saepe quam labore, dolores autem, aliquid mollitia debitis qui veniam, fugit quos expedita nam deleniti repellat aperiam illo nihil recusandae modi. Voluptatum voluptate, quas praesentium iste ratione deleniti nobis odit odio dolores rerum. Ratione consequatur, iusto dolorum, quidem ipsum provident illum natus aspernatur qui fugit expedita adipisci cum necessitatibus eaque atque eveniet ut perspiciatis."
        ]
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});