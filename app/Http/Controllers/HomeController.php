<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::take(10)->get();
        $posts = Post::published()->with("authorId")->inRandomOrder()->take(2)->get();
        return view('welcome', compact('posts', 'services'));
    }
}
