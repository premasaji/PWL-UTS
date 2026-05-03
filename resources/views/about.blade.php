@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">
    <!-- Header Section -->
    <div class="text-center mb-16 m-[75px]">
        <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight">Tim Kreatif Kami</h2>
        <p class="text-lg text-gray-600 mt-4 max-w-2xl mx-auto">Kami adalah sekelompok mahasiswa yang berdedikasi untuk menciptakan solusi digital yang inovatif dan fungsional.</p>
        <div class="h-1.5 w-24 bg-blue-600 mx-auto mt-6 rounded-full"></div>
    </div>

    <!-- Team Cards Grid -->
    <div class=" flex flex-wrap justify-center gap-8">
        @foreach($anggota as $orang)
        <div class="flex-1 sm:w-[300px] group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 overflow-hidden">
            <!-- Dekorasi Atas Card -->
            <div class="h-20 bg-gradient-to-r from-blue-500 to-blue-700"></div>
            
            <div class="px-6 pb-6 -mt-10 text-center">
                <!-- Foto Profile Placeholder -->
                <div class="inline-block relative">
                    <div class="w-20 h-20 bg-gray-200 border-4 border-white rounded-full mx-auto flex items-center justify-center text-blue-600 shadow-md">
                        <svg xmlns="http://w3.org" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>

                <h3 class="mt-3 text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors">{{ $orang['nama'] }}</h3>
                <p class="text-sm font-medium text-blue-500 uppercase tracking-widest mt-1">{{ $orang['peran'] }}</p>
                
                <div class="mt-4 py-3 border-t border-gray-50">
                    <p class="text-sm text-gray-400">NIM</p>
                    <p class="text-md font-mono font-semibold text-gray-700">{{ $orang['Nim'] }}</p>
                </div>

                <!-- Tombol Social Media Palsu -->
                <div class="flex justify-center space-x-3 mt-4">
                    <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center hover:bg-blue-100 hover:text-blue-600 cursor-pointer transition">
                        <i class="fab fa-github"></i>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center hover:bg-blue-100 hover:text-blue-600 cursor-pointer transition">
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
     <!-- Misi Tim -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-gray-700 m-[75px]">
        <div class="p-6 bg-white rounded-xl shadow-sm border-l-4 border-blue-600 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden">
            <h4 class="font-bold text-xl mb-2 text-blue-600">Visi Kami</h4>
            <p>Menjadi kelompok pengembang web yang inovatif dan solutif dalam menghadapi tantangan teknologi modern.</p>
        </div>
        <div class="p-6 bg-white rounded-xl shadow-sm border-l-4 border-green-500 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden">
            <h4 class="font-bold text-xl mb-2 text-green-600">Misi Kami</h4>
            <p>Menerapkan standar kode yang bersih, performa tinggi, dan pengalaman pengguna yang maksimal di setiap proyek.</p>
        </div>
    </div>
</div>
@endsection
