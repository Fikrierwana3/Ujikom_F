<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    // Ambil semua berita
    public function index()
    {
        $berita = berita::with(['user', 'kategori'])->get();

        return response()->json([
            'success' => true,
            'data' => $berita
        ]);
    }

    // Tambahkan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'id_user' => 'required|exists:users,id',
            'id_kategori' => 'required|exists:kategori,id',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $berita = new berita;
        $berita->judul = $request->judul;
        $berita->id_user = $request->id_user;
        $berita->id_kategori = $request->id_kategori;
        $berita->isi = $request->isi;

        if ($request->hasFile('cover')) {
            $path = $request->file('cover')->store('img/berita', 'public');
            $berita->cover = $path;
        }

        $berita->save();

        return response()->json([
            'success' => true,
            'message' => 'Berita berhasil ditambahkan.',
            'data' => $berita
        ], 201);
    }

    // Tampilkan berita berdasarkan ID
    public function show($id)
    {
        $berita = berita::with(['user', 'kategori'])->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $berita
        ]);
    }

    // Update berita
    public function update(Request $request, $id)
    {
        $berita = berita::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'id_user' => 'required|exists:users,id',
            'id_kategori' => 'required|exists:kategori,id',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $berita->judul = $request->judul;
        $berita->id_user = $request->id_user;
        $berita->id_kategori = $request->id_kategori;
        $berita->isi = $request->isi;

        if ($request->hasFile('cover')) {
            if ($berita->cover && Storage::disk('public')->exists($berita->cover)) {
                Storage::disk('public')->delete($berita->cover);
            }
            $path = $request->file('cover')->store('img/berita', 'public');
            $berita->cover = $path;
        }

        $berita->save();

        return response()->json([
            'success' => true,
            'message' => 'Berita berhasil diperbarui.',
            'data' => $berita
        ]);
    }

    // Hapus berita
    public function destroy($id)
    {
        $berita = berita::findOrFail($id);

        if ($berita->cover && Storage::disk('public')->exists($berita->cover)) {
            Storage::disk('public')->delete($berita->cover);
        }

        $berita->delete();

        return response()->json([
            'success' => true,
            'message' => 'Berita berhasil dihapus.'
        ]);
    }
    
    public function detail($id)
{
    $berita = Berita::with('kategori')->findOrFail($id);
    return view('berita.detail', compact('berita'));
}
}
