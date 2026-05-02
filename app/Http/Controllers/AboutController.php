<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
     public function about() {
        $anggota = [
            ['nama' => 'Premas Aji Susilo', 'Nim' => '24104410055', 'peran' => 'Frontend Developer'],
            ['nama' => 'Rechan Rizky Saputra', 'Nim' => '24104410083', 'peran' => 'Backend Developer'],
            ['nama' => 'Alfarizi Bima Setyawan', 'Nim' => '24104410088', 'peran' => 'UI/UX Designer'],
            ['nama' => 'Salis Munna', 'Nim' => '24104410090', 'peran' => 'UI/UX Designer'],
        ];
        return view('about', compact('anggota'));
    }
}
