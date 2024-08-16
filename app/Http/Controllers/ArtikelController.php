<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function artikel()
    {
        return view('user.artikel',  ['title' =>'Artikel UG']);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        //
    }
}
