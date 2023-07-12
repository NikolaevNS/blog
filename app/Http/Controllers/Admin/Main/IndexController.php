<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.main.index', compact('users', 'posts', 'categories', 'tags'));
    }
}
