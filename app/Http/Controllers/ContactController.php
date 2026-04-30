<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'email' => 'support@1squad.id',
            'alamat' => 'Gedung IT Lantai 3, Jl. Majapahit No. 45',
            'sosmed' => [
                'instagram' => '@Kelompok1squad_id',
                'github' => 'premasaji.github.com',
                'linkedin' => 'Kelompok 1'
            ]
        ];

        return view('contact', $data);
    }
}
