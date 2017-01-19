<?php

namespace App\Http\Controllers;


use App\Category;
use App\Post;

class PagesController extends Controller {
    public function getIndex(){
        $categories = Category::all();

        $builder = Post::orderBy('created_at', 'desc');
        $latest = $builder->take(5)->get();
        $posts = $builder->paginate(5);
        return view('pages.welcome')->withLatest($latest)->withPosts($posts)->withCategories($categories);

    }

    public function getAbout(){
        return view('pages.about');
    }

    public function getContact(){
        return view('pages.contact');
    }


}