<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('tech-blog.index');
    }
    public function contact()
    {
        return view('tech-blog.contact');
    }
    public function single()
    {
        return view('tech-blog.single');
    }
    public function category()
    {
        return view('tech-blog.category');
    }


}
