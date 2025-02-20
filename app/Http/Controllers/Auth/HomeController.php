<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\berita;
use App\Models\kategori;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totberita = berita::count('id');
        $totkategori = kategori::count('id');
        $totuser = User::count('id');
        $berita = berita::latest()->limit(1)->get();
        $kategori = kategori::all();
        $user = User::all();
        return view('auth.home', compact('berita', 'kategori', 'user', 'totberita', 'totkategori', 'totuser'));

    }
}
