<?php

namespace App\Models;

 

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Annisa Salsabila",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio libero saepe, unde a cumque omnis cum fugit adipisci explicabo inventore veniam eius, tempora autem necessitatibus sint voluptatum placeat temporibus suscipit beatae! Aspernatur beatae quo consequuntur cum tenetur magnam et laudantium nihil architecto natus veniam accusantium esse necessitatibus nobis, minus distinctio corporis asperiores quibusdam vitae. Quos provident harum possimus tempore obcaecati quasi aspernatur omnis nostrum aliquam, cum, incidunt officia voluptatibus ratione perspiciatis hic aliquid? Qui, delectus dicta odio cupiditate officia eaque?"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Adinda Daffa",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit nisi dolores, odit hic voluptatibus neque consequuntur possimus eum ad ullam, aperiam, autem blanditiis alias reprehenderit tenetur expedita eligendi? Distinctio libero sunt, ut, natus veniam ratione vero atque sapiente in voluptatem nam asperiores praesentium impedit accusantium necessitatibus repellendus blanditiis eum facere consequuntur, placeat inventore voluptate nostrum nihil. Commodi sed deleniti unde, impedit assumenda incidunt ea fuga maiores explicabo dolore eligendi facere maxime illo. Velit explicabo ducimus asperiores inventore eveniet, maxime sunt culpa corrupti assumenda incidunt! Dignissimos iusto atque saepe mollitia repudiandae libero quis eius doloremque! Facilis non consequatur veritatis deserunt soluta?"
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts); 
        }

        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }
}