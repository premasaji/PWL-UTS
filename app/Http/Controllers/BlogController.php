<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
        public function index() {
        $artikel = [
            ['judul' => 'Belajar Laravel 13', 'penulis' => 'Budi', 'tanggal' => '20 April 2026', 'isi' => 'Laravel terus berkembang dengan fitur-fitur baru yang memudahkan developer.'],
            ['judul' => 'Tips TailwindCSS', 'penulis' => 'Andi', 'tanggal' => '22 April 2026', 'isi' => 'Gunakan utility classes untuk membuat UI yang responsive dengan cepat.'],
            ['judul' => 'Membangun Tim Solid', 'penulis' => 'Siti', 'tanggal' => '25 April 2026', 'isi' => 'Kolaborasi adalah kunci utama dalam kesuksesan sebuah proyek IT.']
        ];
        return view('blog', compact('artikel'));
    }
}
