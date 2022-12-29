<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class NewsController extends Controller
{
    public function NewsArc(){
        $news = Post::with('user', 'category')->latest()->get();
    
        return view('news_research',compact('news'));
    }

    public function NewsDetails($id){
        $allnews = Post::latest()->limit(4)->get();
        $news = Post::findOrFail($id);
        return view('news_details',compact('news', 'allnews'));
    }
}
