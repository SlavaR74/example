<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        // $data = $request->all();
        $search = $request->input('search');
        $category_id = $request->input('category_id');

        dd($search, $category_id);

        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Ea, impedit! Vitae aperiam sunt distinctio architecto voluptas, totam autem dolores, quibusdam aut quas beatae, ipsum nisi.',
            'category_id' => 1,
        ];

        $posts = array_fill(0, 10, $post);

        // dd($posts);

        return view('blog.index', compact('posts'));
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Ea, impedit! Vitae aperiam sunt distinctio architecto voluptas, totam autem dolores.',
        ];


        return view('blog.show', compact('post'));
    }

    public function like($post)
    {
        return 'Поставить лайк';
    }
}
