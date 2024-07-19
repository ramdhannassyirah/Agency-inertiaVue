<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Blog;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{

    public function index()
    {
        $blogs = Blog::OrderBy('created_at', 'desc')->take(3)->get();

        foreach ($blogs as $blog) {
            $blog->image = Storage::url($blog->image);
        }
    
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
