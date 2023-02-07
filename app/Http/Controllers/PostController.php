<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::query()
                    ->select(['title', 'body', 'slug'])
                    ->with('author:id,name')
                    ->paginate(10);

        return view('posts.index',compact('posts'));
    }

    public function view($slug){
        $post = Post::where('slug',$slug)->firstOrFail();

        return view('posts.view',compact('post'));
    }
}
