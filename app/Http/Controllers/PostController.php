<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;


class PostController extends Controller
{


    public function index()
    {
        // create a variable and store all the blog posts in it from the database
        $posts = Post::all();
        //return a view and pass in the above variable
        return view('posts.index')->withPosts($posts);
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        //we need to validate the data
        $this->validate($request, array(
            'title'=>'required|max:100',
            'body'=>'required'
        ));
        //store in the database
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        //sessions
        Session::flash('success','The post was successfully saved');
        //redirect ot another page
        return redirect()->route('posts.show', $post->id);

    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    public function edit($id)
    {
        //find the post in the database and save as a var
        $post = Post::find($id);
        //return the view and pass in the var we previously created
        return view('posts.edit')->withPost($post);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
