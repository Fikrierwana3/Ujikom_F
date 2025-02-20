<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\kategori;
use App\Models\User;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $berita = berita::all();


        return view('beritas.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $kategori = kategori::all();
        return view('beritas.create', compact('user', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita = new berita;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('img/berita', $name);
            $berita->cover = $name;
        }

        $berita->judul = $request->judul;
        $berita->id_user = $request->id_user;
        $berita->id_kategori = $request->id_kategori;
        $berita->isi = $request->isi;

        $berita->save();
        return redirect()->route('berita.index')
            ->with('success', 'data berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = berita::FindOrFail($id);
        return view('beritas.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = berita::FindOrFail($id);
        $user = User::all();
        $kategori = kategori::all();
        return view('beritas.edit', compact('berita', 'user', 'kategori'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = berita::FindOrFail($id);

        
        
        $berita->judul = $request->judul;
        $berita->id_user = $request->id_user;
        $berita->id_kategori = $request->id_kategori;
        $berita->isi = $request->isi;
        
        if ($request->hasFile('cover')) {
            $berita->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('img/berita', $name);
            $berita->cover = $name;
        }
        
        $berita->save();
        return redirect()->route('berita.index')
            ->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = berita::FindOrFail($id);
        $berita->delete();
        return redirect()->route('berita.index')
            ->with('success', 'data berhasil di dihapus');
    }
}
