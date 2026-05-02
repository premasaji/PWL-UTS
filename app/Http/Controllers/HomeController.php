<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home', [
            'namaKelompok' => 'Kelompok 1',
            'semester' => 'Semester 4 - Teknik Informatika'
        ]);
    }
}
