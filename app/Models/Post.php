<?php

namespace App\Models;

class Post 
{
   private static $blog_posts=[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tartiwi Aulia Fitri",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Neque ullam suscipit repellat atque ex? Inventore, temporibus repellat?
            Veniam illo nobis recusandae voluptate, cum quia, fugiat soluta officia eos modi earum expedita veritatis explicabo minus adipisci placeat optio sequi et!
             Voluptate ut minima autem, repudiandae libero aspernatur suscipit? Debitis a, sed hic architecto,
             blanditiis praesentium quam qui aut quo rem ad possimus voluptatem odit libero aspernatur veniam ipsa sequi ipsum? 
             Quis excepturi cumque animi consequatur nam non quod magnam enim? Cumque."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-slug-kedua",
            "author" => "Arsyla",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Consequuntur ducimus non dolor. Magni, sunt praesentium iusto deleniti nemo explicabo cumque odit placeat accusantium recusandae sequi,
            consequuntur assumenda ipsa dolorem optio architecto animi ad, voluptate commodi ratione dolore hic.
            Quod necessitatibus neque blanditiis cupiditate recusandae, ipsum earum et enim ducimus!
            Accusamus quam maxime molestias aliquam at consectetur repudiandae eveniet eum modi? Suscipit perspiciatis, accusamus quas consequuntur incidunt autem dicta numquam vero, 
            dignissimos magnam esse aperiam delectus in explicabo repellat consectetur eligendi assumenda? 
            Mollitia recusandae esse laboriosam, maiores doloribus explicabo ullam? Aut quibusdam amet quam voluptatem ratione ipsa asperiores officiis illum corrupti deserunt harum, saepe tempora necessitatibus, 
            fugit totam a possimus nostrum soluta voluptates quisquam ab quis ducimus fuga corporis. 
            Pariatur, deserunt."
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
