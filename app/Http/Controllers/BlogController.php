<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\User;



use Inertia\Inertia;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $blog = Blog::OrderBy('created_at', 'desc')->get();      
        return Inertia::render('Frontend/Blog', [
            'blogs' => $blog,
        ]);
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        if (auth()->user()->role != 'writer') {
            $writers = User::where('role', 'writer')->get();
        }
        return Inertia::render('Dashboard/Writer/Add')->with(('writers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)

    {

        $photo = $request->file('image');
        $path = $photo->store('public/images');

        Blog::create([
            'author_id' => $request->author_id,
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->title . '-' . Str::ulid()),
            'image' => $path,
        ]);


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Cari blog berdasarkan ID
        $blog = Blog::findOrFail($id);

        // Kirim data blog ke view
        return Inertia::render('Frontend/BlogDetail', [
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
