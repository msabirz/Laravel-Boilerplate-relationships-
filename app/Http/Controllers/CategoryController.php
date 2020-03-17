<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $categories = Category::whereUserId(Auth::user()->id)->get();

        return view('category.index', compact('categories'));
    }
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->title = $request->get('title');
        $category->user()->associate($request->user());

        $category->save();

        return 'Success';
    }

    public function delete(Request $request,$id)
    {
        Category::where('id',$id)->delete();


        return 'Success';
    }
}
