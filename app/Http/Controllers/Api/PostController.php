<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->paginate(10);
        return view('admin.post.list', compact('posts'));
    }

    public function create () {
        return view('admin.post.create');
    }
}
