<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Blog;
use Ramsey\Uuid\Type\Integer;

class FrontendController extends Controller
{

    public function index()
    {
        $blogs = Blog::OrderBy('created_at', 'desc')->take(3)->get();
    
        return Inertia::render('Frontend/Index', [
            'blogs' => $blogs,
        ]);
    }
    

    public function blog()
    {
        $blogs = Blog::all();
        return Inertia::render('Frontend/Blog', [
            'blogs' => $blogs
        ]);
    }


    
   
}
