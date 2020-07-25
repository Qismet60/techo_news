<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function news()
    {
        return view('admin.add_news');
    }
    public function category()
    {
        return view('admin.add_category');
    }
    public function message()
    {
        return view('admin.message');
    }
    public function addcategory(Request $request)
    {
        Category::create($request->all());
    }

}
