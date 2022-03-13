<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, autem dolorem illum unde doloribus incidunt natus odit architecto quasi, molestias eum odio, nihil illo libero officia sit ad expedita necessitatibus a fugit qui? At sit ipsum veniam perspiciatis unde optio, labore possimus non repellendus animi, quam dolores provident delectus a assumenda consequuntur sequi numquam. Ea cum obcaecati nisi. A totam praesentium dolor. Modi rem maxime voluptatum odit sint delectus officiis tempora dolorum esse facere, eum odio nulla maiores! Consequuntur, sequi?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto quas natus voluptas obcaecati sapiente veniam autem commodi nam. Fuga libero adipisci odit quidem in animi, cum sed placeat id culpa cumque doloremque nam est eveniet tempore, alias eos temporibus illum deserunt dicta eius explicabo. Optio expedita voluptatem porro explicabo repellat harum eligendi consequuntur quos nostrum, reiciendis nisi sapiente sit nam, eum magnam alias odio eaque minima! Quas, unde consectetur. Nisi distinctio accusamus sunt itaque, magni doloremque? Doloremque suscipit deleniti vel quae nostrum temporibus et adipisci ad laboriosam eveniet. Similique alias tenetur voluptatem harum laborum quod nihil quia ut, excepturi ea."
        ],
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
