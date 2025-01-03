<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Profil extends BaseController
{
    public function index()
    {
        $session = session();
        $userId = $session->get('id'); // Ambil ID pengguna dari session

        // Cek apakah pengguna sudah login
        if ($userId) {
            $userModel = new UserModel();
            $user = $userModel->find($userId); // Ambil data pengguna berdasarkan ID

            if ($user) {
                // Tambahkan role_id jika belum ada
                if (!isset($user['role_id'])) {
                    $user['role_id'] = ($user['role'] === 'owner') ? 1 : 2;
                }

                // Debugging: Periksa session dan data pengguna
                // print_r(session()->get());
                // print_r($user);
                // exit;
            } else {
                // Jika data pengguna tidak ditemukan di database
                return redirect()->to('/login')->with('error', 'User not found.');
            }
        } else {
            // Jika session kosong atau pengguna belum login
            return redirect()->to('/login')->with('error', 'Please login to access this page.');
        }

        // Kirim data user ke view
        return view('profil/v_content', ['user' => $user]);
    }
}
