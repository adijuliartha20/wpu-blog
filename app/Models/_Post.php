<?php

namespace App\Models;


class Post 
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adi Juliartha",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati saepe deleniti sed ducimus deserunt fugit quasi quaerat, quae facere non, neque atque placeat corporis beatae quos, dolorum a quidem. Assumenda beatae, perspiciatis temporibus molestias illo, ea est non quasi expedita placeat rerum. Soluta molestiae facilis iusto id nihil corporis quaerat voluptate! Odio, totam? Fugiat laudantium adipisci asperiores ipsam illum quasi modi officiis omnis sequi. Maiores expedita cum recusandae possimus! Dolor impedit dignissimos, assumenda tempore iste debitis ratione facilis nulla facere."
        ],
        [
            "title" => "Judul Post Adi Juliartha",
            "slug" => "judul-post-kedua",
            "author" => "Meyan Pratiwi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam expedita aliquam eaque, accusamus tempore eveniet debitis cumque molestias a ducimus maxime. Facere quaerat recusandae sit quod saepe qui modi quia ipsa impedit ex excepturi temporibus neque eius laboriosam officiis, iure aperiam itaque ipsum doloremque. Tenetur, repudiandae quidem. Libero a ad neque enim rem ipsum ullam ipsam nobis aperiam eligendi magnam corrupti porro ratione doloribus rerum illum et quo maiores veniam quos, est aspernatur, cumque commodi praesentium. Porro quam repudiandae vitae perspiciatis aliquid omnis magnam nisi laboriosam! Fugit distinctio, dolorum ipsum rem fuga voluptas excepturi quia odio magni quisquam atque doloremque."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere("slug",$slug);
    }
}
