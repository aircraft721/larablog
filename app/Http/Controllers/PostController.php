<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mews\Purifier\Facades\Purifier;
use Session;
use Image;



class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

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
            'slug'=>'required|alpha_dash|min:5|max:100|unique:posts,slug',
            'body'=>'required'
        ));
        //store in the database
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = Purifier::clean($request->body);


        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->save($location);
            $post->image = $filename;
        }

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
        //validate the data
        $post = Post::find($id);
        if($request->input('slug')==$post->slug){
            $this->validate($request, array(
                'title'=>'required|max:100',
                'body'=>'required'
            ));
        }else{
            $this->validate($request, array(
                'title'=>'required|max:100',
                'slug'=>'required|alpha_dash|min:5|max:100|unique:posts,slug',
                'body'=>'required'
            ));
        }

        //save the data to the database
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->body = Purifier::clean($request->input('body'));
        $post->save();
        //set flash data with success message
        Session::flash('success','This post was saved!');
        //redirect with flash to the posts.show
        return redirect()->route('posts.show', $post->id);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success','The post was successfully deleted.');
        return redirect()->route('posts.index');
    }




}
