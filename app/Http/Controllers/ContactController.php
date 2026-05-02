<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $data = [
            'email' => 'onesquad@gmail.com',
            'alamat' => 'Jl. Majapahit No. 15, Blitar',
            'sosmed' => [
                'instagram' => '@onesquad_id',
                'github' => 'onesquad.github.com',
                'linkedin' => 'linkedin.com'
            ]
        ];
        return view('contact', $data);
    }
}
