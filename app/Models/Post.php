<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
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

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
        
    }
}
