<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Storage;



use Inertia\Inertia;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $blog = Blog::all();
        return Inertia::render('Dashboard/Writer/DashboardBlog', [
            'blog' => $blog
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
    public function show()
    {

       
      
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        // Ambil gambar blog
        $blog->image = Storage::url($blog->image);

        // Kirim data blog ke view
        return Inertia::render('Dashboard/Writer/Edit', [
            'blog' => $blog
        ]);
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang diterima dari request jika diperlukan
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048', // Validasi untuk file gambar jika ada
        ]);

        try {
            // Ambil data blog berdasarkan ID atau gagal jika tidak ditemukan
            $blog = Blog::findOrFail($id);

            // Update data berdasarkan request
            $blog->title = $request->input('title');
            $blog->content = $request->input('content');

            // Handle gambar jika ada perubahan
            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada dan simpan yang baru
                if ($blog->image) {
                    Storage::delete($blog->image); // Menghapus gambar lama dari storage
                }
                $imagePath = $request->file('image')->store('public/images');
                $blog->image = $imagePath;
            }

            // Simpan perubahan ke database
            $blog->save();

            // Redirect atau kirim respons berhasil
            return redirect()->route('blog.index')->with('success', 'Blog berhasil diperbarui.');
        } catch (\Throwable $th) {
            // Tangani jika terjadi error
            return back()->withErrors(['error' => 'Gagal memperbarui blog. Silakan coba lagi.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
