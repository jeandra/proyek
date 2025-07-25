<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        // Cek apakah user sudah login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // Kirim data ke view dashboard
        $data = [
            'title' => 'Dashboard',
            'nama' => session()->get('nama'),
            'role' => session()->get('role'),
        ];

        return view('dashboard/index', $data);
    }
}
