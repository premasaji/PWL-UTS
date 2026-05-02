@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- HERO SECTION: Split Screen -->
    <div class="flex flex-col lg:flex-row items-center justify-between min-h-[70vh] gap-12 py-10">
        
        <!-- Teks Penjelasan -->
        <div class="lg:w-1/2 text-center lg:text-left">
            <h2 class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-4">
                Selamat Datang di {{ $namaKelompok }}
            </h2>
            <h1 class="text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                Membangun Masa Depan Melalui <span class="text-blue-600">Barisan Kode</span>.
            </h1>
            <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                Kami adalah tim pengembang muda dari {{ $semester }} yang berfokus pada penciptaan solusi web inovatif menggunakan teknologi terbaru seperti Laravel dan Tailwind CSS.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                <a href="/about" class="bg-blue-600 text-white px-8 py-4 rounded-xl font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 hover:-translate-y-1 transition-all duration-300 text-center">
                    Kenali Tim Kami
                </a>
                <a href="/blog" class="bg-white border-2 border-gray-200 text-gray-700 px-8 py-4 rounded-xl font-bold hover:bg-gray-50 hover:border-blue-600 hover:text-blue-600 transition-all duration-300 text-center">
                    Baca Artikel
                </a>
            </div>
        </div>

        <!-- Gambar Ilustrasi/Foto -->
        <div class="lg:w-1/2 relative">
            <!-- Dekorasi Background  -->
            <div class="absolute inset-0 bg-blue-400 rounded-full blur-[100px] opacity-20 group-hover:opacity-30 transition-opacity"></div>
            <div class="relative overflow-hidden rounded-3xl border border-white/20 shadow-2x"></div>
            
            <div class="relative">
                <!-- Gambar Ilustrasi -->
                <img src="{{ asset('img/Gambar.png') }}" 
                     alt="Coding Illustration" 
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 rounded-2xl">
            </div>
        </div>
    </div>

    <!-- STACK SECTION -->
    <div class="mt-20 border-t border-gray-100 pt-10 pb-10">
        <p class="text-center text-bold text-black font-semibold uppercase tracking-widest text-[15px] mb-10">
            Teknologi yang Kami Gunakan
        </p>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
            <!-- Laravel -->
            <div class="group flex flex-col items-center transition-all duration-300 hover:scale-110">
                <img src="{{ asset('img/Laravel.png') }}" alt="Laravel" class="w-15 h-15 mb-2 transition-all">
                <span class="text-[10px] font-bold text-red-600">LARAVEL</span>
            </div>

            <!-- PHP -->
            <div class="group flex flex-col items-center transition-all duration-300 hover:scale-110">
                <img src="{{ asset('img/php.png') }}" alt="PHP" class="w-15 h-15 mb-2 transition-all">
                <span class="text-[10px] font-bold text-black ">PHP</span>
            </div>

            <!-- Tailwind -->
            <div class="group flex flex-col items-center transition-all duration-300 hover:scale-110">
                <img src="{{ asset('img/tailwind-css.png') }}" alt="Tailwind" class="w-15 h-15 mb-2 transition-all">
                <span class="text-[10px] font-bold text-cyan-500">TAILWIND</span>
            </div>

            <!-- MySQL -->
            <div class="group flex flex-col items-center transition-all duration-300 hover:scale-110">
                <img src="{{ asset('img/MySQL.png') }}" alt="MySQL" class="w-15 h-15 mb-2 transition-all">
                <span class="text-[10px] font-bold text-blue-800">MYSQL</span>
            </div>

            <!-- GitHub -->
            <div class="group flex flex-col items-center transition-all duration-300 hover:scale-110">
                <img src="{{ asset('img/github.png') }}" alt="GitHub" class="w-15 h-15 mb-2 transition-all">
                <span class="text-[10px] font-bold text-black">GITHUB</span>
            </div>
        </div>
    </div>
</div>
@endsection
