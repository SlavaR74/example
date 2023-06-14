<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Ea, impedit! Vitae aperiam sunt distinctio architecto voluptas, totam autem dolores, quibusdam aut quas beatae, ipsum nisi.',
        ];

        $posts = array_fill(0, 10, $post);
            return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        

        return view('user.posts.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        dd($title, $content);

        return 'Запрос создания поста';
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Ea, impedit! Vitae aperiam sunt distinctio architecto voluptas, totam autem dolores, quibusdam aut quas beatae, ipsum nisi.',
        ];

        $posts = array_fill(0, 10, $post);

        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Ea, impedit! Vitae aperiam sunt distinctio architecto voluptas, totam autem dolores, quibusdam aut quas beatae, ipsum nisi.',
        ];

        

        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        dd($title, $content);

        return 'Страница обновления поста';
    }

    public function delete()
    {
        return 'Страница удаления поста';
    }
}
