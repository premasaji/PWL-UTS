<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'email' => 'support@techsquad.id',
            'alamat' => 'Gedung IT Lantai 3, Jl. Pendidikan No. 45',
            'sosmed' => [
                'instagram' => '@techsquad_id',
                'github' => '://github.com',
                'linkedin' => 'Tech Squad Indonesia'
            ]
        ];

        return view('contact', $data);
    }
}
