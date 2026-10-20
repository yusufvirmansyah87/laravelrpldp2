<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = KategoriArtikel::all();

        return view('admin.kategori.index', [
             'kategori' => $kategori
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama_kategori' => 'required|max:100'
        ]);
        
        KategoriArtikel::create([
        'nama_kategori' => $request->nama_kategori
        ]);
        return redirect()
        ->route('kategori.index');
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
    public function edit(KategoriArtikel $kategori)
        {
            return view('admin.kategori.edit', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriArtikel $kategori)
    {
        $request->validate([
        'nama_kategori' => 'required|max:100'
        ]);
       
        $kategori->update([
        'nama_kategori' => $request->nama_kategori
        ]);

        return redirect()
            ->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
/**
 * Remove the specified resource from storage.
 */
    public function destroy(KategoriArtikel $kategori)
    {
        $kategori->delete();

        return redirect()
            ->route('kategori.index')
            ->with('success', 'Hapus Kategori Berhasil.');
    }
}
