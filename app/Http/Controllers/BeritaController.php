<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function berita()
    {   
        $berita = Berita::all();
        return view('user.berita', ['title' => 'Berita'] , compact('berita'));
    }

    public function index(){
        $berita = Berita::all();
        return view('admin.berita.berita', ['title' => 'Data Berita'], compact('berita'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.buat',['title' => 'Buat Berita']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the request data
        $validatedData = $request->validate([
            'title' => ['required', 'min:5'],
            'slug' => ['required', 'min:10', 'unique:beritas'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg'],
            'body' => 'required'
        ]);
    
        // Debug the validated data
        // ddd($validatedData);
    
        // Store the image if it exists
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('berita-images');
        }
    
        // Add additional fields
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
    
        // Create a new Berita record
        Berita::create($validatedData);
    
        // Redirect to the index page with a success message
        return redirect()->route('admin.berita.index')->with('status', 'Berita berhasil ditambahkan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        // $berita = Berita::where('slug', $berita->slug)->firstOrFail();
        return view('admin.berita.detail', ['title' => 'Detail Berita', 'berita' => $berita]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'), ['title' => "Edit Berita"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
        ];
    
        if ($request->slug != $berita->slug) {
            $rules['slug'] = 'required|unique:beritas';
        }
    
        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
    
        $berita->update($validatedData);
    
        return redirect()->route('admin.berita.index')->with('status', 'Berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        Berita::destroy($berita->id);
        return redirect()->route('admin.berita.index')->with('status', 'Berita berhasil dihapus');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Berita::class, 'slug',  $request->title);
        return response()->json(['slug'=>$slug]);
    }
}
