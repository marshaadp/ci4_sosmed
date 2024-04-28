<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HelloController extends BaseController
{
    public function index()
    {
        // Ambil data profil dari sesi (contoh saja)
        $profile = [
            'username' => 'marshaadp',
            'fullname' => 'Marshanda Dwi Putri',
            'bio' => 'Welcome to my Twitter profile!',
            'profile_picture' => 'keica.jpg',
            'tweets' => [
                ['content' => 'Hello, Twitter world!', 'timestamp' => '2024-04-28 08:00:00'],
                ['content' => 'Just tweeted something.', 'timestamp' => '2024-04-28 08:15:00'],
                // Data tweet lainnya bisa ditambahkan di sini
            ]
        ];

        // Kirim data profil ke tampilan
        $data = [
            'profile' => $profile
        ];

        echo view('index', $data);
    }
}