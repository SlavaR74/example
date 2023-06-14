<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index()
    {
        return 'Страница админа постов';
    }

    public function create()
    {
        return 'Страница администрирования постов';
    }

    public function store()
    {
        return 'Запрос администрирования поста';
    }

    public function show($post)
    {
        return 'Страница просмотр админа поста {$post}';
    }

    public function edit($post)
    {
        return 'Страница изменения админа поста {$post}';
    }

    public function update()
    {
        return 'Страница обновления админа поста';
    }

    public function delete()
    {
        return 'Страница удаления админа поста';
    }

    public function like()
    {
        return 'Страница лайков админа поста';
    }
}
