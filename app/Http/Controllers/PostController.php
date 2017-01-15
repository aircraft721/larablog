<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;


class PostController extends Controller
{


    public function index()
    {
        //
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
        //redirect ot another page
        return redirect()->route('posts.show', $post->id);

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
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
