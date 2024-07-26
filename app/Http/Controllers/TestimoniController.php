<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Testimonials;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testi = Testimonials::all();
        return Inertia::render('Dashboard/Writer/Testimonial/DashboardTesti',[
            'testi' => $testi
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
        return Inertia::render('Dashboard/Writer/Testimonial/Add')->with(('writers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'rating' => 'required|in:1,2,3,4,5'
        ]);


        $photo = $request->file('image');
        $path = $photo->store('public/images');

        Testimonials::create([
          'name' => $request->name,
          'position' => $request->position,
          'content' => $request->content,
          'image' => $path,
          'rating' => $request->rating
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $testi = Testimonials::findOrFail($id);

        // Ambil gambar blog
        $testi->image = Storage::url($testi->image);

        // Kirim data blog ke view
        return Inertia::render('Dashboard/Writer/Testimonial/Edit', [
            'testi' => $testi
        ]);
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'rating' => 'required|in:1,2,3,4,5'
        ]);
    
        try {
            // Ambil data testimonial berdasarkan ID atau gagal jika tidak ditemukan
            $testi = Testimonials::findOrFail($id);
    
            // Update data berdasarkan request
            $testi->name = $request->input('name');
            $testi->position = $request->input('position');
            $testi->content = $request->input('content');
            $testi->rating = $request->input('rating');
    
            // Handle gambar jika ada perubahan
            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada dan simpan yang baru
                if ($testi->image) {
                    Storage::delete($testi->image); // Menghapus gambar lama dari storage
                }
                $imagePath = $request->file('image')->store('public/images');
                $testi->image = $imagePath;
            }
    
            // Simpan perubahan ke database
            $testi->save();
    
           
        } catch (\Throwable $th) {
            // Tangani jika terjadi error
            return back()->withErrors(['error' => 'Gagal memperbarui testimonial. Silakan coba lagi.']);
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testi = Testimonials::findOrFail($id);
        Storage::delete($testi->image);
        $testi->delete();
    }
}
