<?php

namespace App\Http\Controllers\User;

use App\Models\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tranding = berita::latest()->limit(1)->get();
        $satu = berita::latest()->limit(3)->get();
        $recent = berita::latest()->limit(5)->get();
        $category = berita::latest()->limit(6)->get();

        return view('user.home', compact('tranding', 'category', 'satu', 'recent'));
    }
}
