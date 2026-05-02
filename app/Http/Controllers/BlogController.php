<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
        public function blog() {
        $artikel = [
            ['judul' => 'Belajar Laravel 13', 'penulis' => 'Aji', 'tanggal' => '20 April 2026', 'isi' => 'Laravel terus berkembang dengan fitur-fitur baru yang memudahkan developer.'],
            ['judul' => 'Tips TailwindCSS', 'penulis' => 'Rizky', 'tanggal' => '22 April 2026', 'isi' => 'Gunakan utility classes untuk membuat UI yang responsive dengan cepat.'],
            ['judul' => 'Membangun Tim Solid', 'penulis' => 'Bima', 'tanggal' => '25 April 2026', 'isi' => 'Kolaborasi adalah kunci utama dalam kesuksesan sebuah proyek IT.']
        ];
        return view('blog', compact('artikel'));
    }
}
