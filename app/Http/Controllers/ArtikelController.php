<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function lamanArtikel()
    {
        $artikel = Artikel::paginate(6);
        return view('user.artikel', ['title' => 'Artikel UG'], compact('artikel'));
    }

    public function index(){
        $artikel = Artikel::all();
        return view('admin.artikel.artikel', ['title' => 'Data Artikel'], compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.artikel.buat', ['title' => 'Buat Artikel']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => ['required','min:5'],
            'slug' => ['required', 'min:10', 'unique:artikels'],
            'body' => 'required'
        ]);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        // dd($validateData);
    
        // Create a new artikel record
        Artikel::create($validateData);

        return redirect()->route('admin.artikel.index')->with('status', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        return view('admin.artikel.detail', ['title' => 'Detail artikel', 'artikel' => $artikel]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        return view('admin.artikel.edit', ['title' => 'Update Artikel', 'artikel' => $artikel]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
        ];
    
        if ($request->slug != $artikel->slug) {
            $rules['slug'] = 'required|unique:artikels';
        }
    
        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
    
        $artikel->update($validatedData);
    
        return redirect()->route('admin.artikel.index')->with('status', 'artikel berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        Artikel::destroy($artikel->id);
        return redirect()->route('admin.artikel.index')->with('status', 'Berita berhasil dihapus');
    }

    public function detail(Artikel $artikel){
        return view('user.detailberita', ['title'=>'Detail Berita', 'artikel'=>$artikel]);
    }
}
