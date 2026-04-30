<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            'namaWebsite' => 'Kelompok 1 Profile',
            'tagline' => 'Website ini adalah hasil kerja kelompok 1 untuk memenuhi tugas mata kuliah Pemrograman Web Lanjut di semester 4.
             Di dalam website ini, kami akan memperkenalkan anggota kelompok kami, menampilkan profil masing-masing anggota, serta memberikan informasi kontak untuk memudahkan komunikasi dengan kami.
             Terima kasih telah mengunjungi website kami, dan jangan ragu untuk menjelajahi setiap halaman untuk mengetahui lebih banyak tentang kelompok kami!',
            'namaKelompok' => 'Kelompok 1',
            'semester' => 'Semester 4'
        ]);
    }

    public function about() {
        $anggota = [
            ['nama' => 'Budi Santoso', 'nim' => '22010101', 'peran' => 'Frontend Developer'],
            ['nama' => 'Siti Aminah', 'nim' => '22010102', 'peran' => 'Backend Developer'],
            ['nama' => 'Andi Wijaya', 'nim' => '22010103', 'peran' => 'UI/UX Designer']
        ];
        return view('about', compact('anggota'));
    }

    public function contact() {
        return view('contact', [
            'email' => 'halo@techsquad.com',
            'alamat' => 'Jl. Teknologi No. 404, Jakarta',
            'sosmed' => [
                'instagram' => '@techsquad_id',
                'github' => '://github.com',
                'linkedin' => '://linkedin.com'
            ]
        ]);
    }
}
