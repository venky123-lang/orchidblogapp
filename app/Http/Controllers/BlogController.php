<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getBlogs(){
        $blogs = Post::orderBy("created_at","desc")->paginate(10);
        return view('components.home',compact('blogs'));
    }
}
