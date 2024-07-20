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
        $blog = Blog::OrderBy('created_at', 'desc')->get();  
        
        foreach ($blog as $blogs) {
            $blogs->image = Storage::url($blogs->image);
        }
        return Inertia::render('Frontend/Blog', [
            'blogs' => $blog
        ]);
    }

    public function detailBlog(string $slug)
    {

        $blog = Blog::findOrFail($slug);

        // Ambil gambar blog
        $blog->image = Storage::url($blog->image);

        // Kirim data blog ke view
        return Inertia::render('Frontend/BlogDetail', [
            'blog' => $blog
        ]);
      
    }

  

    public function allBlog()
    {
        $blog = Blog::OrderBy('created_at', 'desc')->get();     
        
        foreach ($blog as $blogs) {
            $blogs->image = Storage::url($blogs->image);
        }

        return Inertia::render('Frontend/Blog', [
            'blogs' => $blog,
        ]);
        
    }

   

    
   
}
