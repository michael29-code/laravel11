<?php 

namespace App\Models;

use Illuminate\Support\Arr;


class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array {
        // return Arr::first(static::all(), function($post) use ($slug){
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(),fn($post) => $post['slug'] == $slug);

        if(!$post)
        {
            abort(404);
        }
        return $post;
    }
}

?>