<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $tag = $request->query('tag');

        $posts = Post::published()
                    ->when($tag, function ($query, $tag) {
                        return $query->where('category_id', $tag);
                    })
                    ->paginate(12);

        return view('front.blogs.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->published()->first();
        if (!$post) {
            abort(404, 'Post not found');
        }

        $recentPosts = Post::published()->where('slug', '!=', $slug)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $tags = Category::inRandomOrder()->take(5)->get();

        return view('front.blogs.details', compact('post', 'recentPosts', 'tags'));
    }
}
