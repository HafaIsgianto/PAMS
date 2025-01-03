<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        
    }

    // Menampilkan daftar users
    public function index()
    {
        $data['users'] = $this->userModel->findAll();
        return view('users/index', $data);
    }
    public function create()
    {
        
        helper(['form']);
        $data = [];
        return view('users/create',$data);
    }
    // Menampilkan form tambah user


    public function store()
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
            return redirect()->to('/users');
        } else {
            $data['validation'] = $this->validator;
            echo view('/users/create', $data);
        }
    }

    // Menampilkan form edit user
    public function edit($id)
    {
        $data['user'] = $this->userModel->find($id);

        if (!$data['user']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User tidak ditemukan');
        }

        return view('users/edit', $data);
    }


    public function update($id)
    {
        
        $validation = \Config\Services::validation();

        $validation->setRules([
            'username' => "required|min_length[3]|is_unique[users.username,id,{$id}]",
            'email'    => "required|valid_email|is_unique[users.email,id,{$id}]",
            'no_hp'    => 'required|numeric|min_length[10]',
            'role'     => 'required|in_list[owner,user]',
        ]);
        

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        $data = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'no_hp'    => $this->request->getPost('no_hp'),
            'role'     => $this->request->getPost('role'),
        ];
        

        $this->userModel->update($id, $data);

        return redirect()->to('/users')->with('message', 'User berhasil diperbarui!');
    }

    // Menghapus user
    public function delete($id)
    {
        if (!$this->userModel->find($id)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User tidak ditemukan');
        }

        $this->userModel->delete($id);

        return redirect()->to('/users')->with('message', 'User berhasil dihapus!');
    }
}
