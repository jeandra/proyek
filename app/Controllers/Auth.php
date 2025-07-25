<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'id'         => $user['id'],
                    'nama'       => $user['nama'],
                    'email'      => $user['email'],
                    'role'       => $user['role'],
                    'isLoggedIn' => true,
                ]);
                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->withInput()->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()->withInput()->with('error', 'Email tidak ditemukan');
        }
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registerPost()
    {
        $validation = \Config\Services::validation();
        $userModel  = new UserModel();

        $data = $this->request->getPost([
            'username', 'email', 'password', 'password_confirm'
        ]);

        $rules = [
            'username'         => 'required|min_length[3]|max_length[100]',
            'email'            => 'required|valid_email|is_unique[users.email]',
            'password'         => 'required|min_length[6]',
            'password_confirm' => 'required|matches[password]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', implode('<br>', $validation->getErrors()));
        }

        $userModel->save([
            'nama'     => $data['username'],
            'email'    => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            'role'     => 'pegawai',
        ]);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
