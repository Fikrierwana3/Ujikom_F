@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $berita->judul }}</h1>
    <img src="{{ asset('/img/berita/' . $berita->cover) }}" alt="{{ $berita->judul }}">
    <p>Kategori: {{ $berita->kategori->nama }}</p>
    <div>{!! $berita->isi !!}</div>
    <small>Tanggal: {{ $berita->created_at->format('d M Y') }}</small>
</div>
@endsection
