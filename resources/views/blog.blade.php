@extends('layouts.app')

@section('content')
<h2 class="text-3xl font-bold mb-6">Artikel Terbaru</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($artikel as $post)
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition">
        <h3 class="font-bold text-xl mb-2">{{ $post['judul'] }}</h3>
        <p class="text-sm text-blue-500 mb-4">{{ $post['penulis'] }} | {{ $post['tanggal'] }}</p>
        <p class="text-gray-600 mb-4">{{ $post['isi'] }}</p>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Baca Selengkapnya</button>
    </div>
    @endforeach
</div>
@endsection
