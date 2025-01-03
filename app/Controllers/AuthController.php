<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function register()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('v_register', $data);
    }

    public function save()
    {
        // Include helper form
        helper(['form']);
    
        // Set rules validation form
        $rules = [
            'username'      => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'no_hp'         => 'required|min_length[10]|max_length[15]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'repassword'    => 'matches[password]',
            'role'          => 'required|in_list[user,owner]'
        ];
    
        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'username'      => $this->request->getVar('username'),
                'email'         => $this->request->getVar('email'),
                'no_hp'         => $this->request->getVar('no_hp'),
                'password'      => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'role'          => $this->request->getVar('role')
            ];
            $model->save($data);
    
            // Set flashdata for success message
            session()->setFlashdata('success', 'Registrasi berhasil! Silakan login.');
    
            // Redirect to login page or another page
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('v_register', $data);
        }
    }
    

    public function login()
    {
        helper(['form']);
        echo view('v_login');
    }

    public function auth()
{
    
    $session = session();
    $model = new UserModel();
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');
    $data = $model->where('username', $username)->first();
    
    if ($data) {
        $pass = $data['password'];
        $verify_pass = password_verify($password, $pass);
        if ($verify_pass) {
            $role_id = ($data['role'] === 'owner') ? 1 : 2; // Assign role ID berdasarkan role
            $ses_data = [
                'id'       => $data['id'], // Konsisten dengan session ID
                'username' => $data['username'],
                'email'    => $data['email'],
                'role'     => $data['role'],
                'role_id'  => $role_id,
                'logged_in' => true
            ];
            $session->set($ses_data);
            if ($data['role'] === 'owner') {
                return redirect()->to('/dashboard-admin'); // Halaman admin
            } else {
                return redirect()->to('/dashboard-user'); // Halaman user
            }
        } else {
            $session->setFlashdata('msg', 'Password salah!');
            return redirect()->to('');
        }
    } else {
        $session->setFlashdata('msg', 'Username tidak ditemukan!');
        return redirect()->to('');
    }
    }



    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    

    public function profil()
    {
        $userModel = new UserModel();

        // Ambil data pengguna (misalnya berdasarkan ID pengguna yang login)
        $userId = session()->get('user_id');
        $userData = $userModel->find($userId);

        // Tambahkan logika role_id
        if ($userData['role'] === 'owner') {
            $userData['role_id'] = 1;
        } elseif ($userData['role'] === 'user') {
            $userData['role_id'] = 2;
        }

        // Kirim data ke view
        return view('profil', ['user' => $userData]);
    }
}
