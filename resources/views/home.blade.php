@extends('layouts.app')

@section('content')
<div class="text-center py-20">
    <h2 class="text-5xl font-extrabold text-blue-600">{{ $namaWebsite }}</h2>
    <p class="text-xl mt-4 text-gray-600">"{{ $tagline }}"</p>
    <div class="mt-10 p-6 bg-white shadow-md rounded-lg inline-block">
        <p class="font-bold">{{ $namaKelompok }}</p>
        <p class="text-gray-500">{{ $semester }}</p>
    </div>
</div>
@endsection
