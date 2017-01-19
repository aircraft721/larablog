<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $categories = Category::all();

        return view('categories.index')->withCategories($categories);
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name'=>'required|max:255'
        ));
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        Session::flash('success', 'New Category has been created');
        return redirect()->route('categories.index');
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
