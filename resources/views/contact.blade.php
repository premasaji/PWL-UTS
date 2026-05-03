@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto ">
    <h2 class="text-3xl font-bold mb-8 text-gray-800 border-b-2 border-blue-600 inline-block m-[100px]">Hubungi Kami</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Informasi Kontak -->
        <div class="space-y-6">
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow flex items-center space-x-4">
                <div class="bg-blue-100 p-3 rounded-full text-blue-600">
                    <svg xmlns="http://w3.org" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Email Resmi</p>
                    <p class="font-semibold">{{ $email }}</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow flex items-center space-x-4">
                <div class="bg-green-100 p-3 rounded-full text-green-600">
                    <svg xmlns="http://w3.org" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Lokasi Kantor</p>
                    <p class="font-semibold">{{ $alamat }}</p>
                </div>
            </div>
        </div>

        <!-- Media Sosial -->
        <div class="bg-blue-600 p-8 rounded-2xl hover:shadow-xl shadow-gray-400 shadow-md text-white transition-shadow">
            <h3 class="text-xl font-bold mb-4">Media Sosial</h3>
            <ul class="space-y-4">
                <li class="flex justify-between items-center border-b border-blue-400 pb-2">
                    <span>Instagram</span>
                    <span class="font-mono">{{ $sosmed['instagram'] }}</span>
                </li>
                <li class="flex justify-between items-center border-b border-blue-400 pb-2">
                    <span>GitHub</span>
                    <span class="font-mono">{{ $sosmed['github'] }}</span>
                </li>
                <li class="flex justify-between items-center border-b border-blue-400 pb-2">
                    <span>LinkedIn</span>
                    <span class="font-mono">OneSquad</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
