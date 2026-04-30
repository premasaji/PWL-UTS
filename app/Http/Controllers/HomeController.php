<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            'namaWebsite' => 'Tech Squad Profile',
            'tagline' => 'Inovasi Tanpa Batas',
            'namaKelompok' => 'Kelompok 5',
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
