<?php

namespace App\Controllers;

use App\Models\DonaturModel;

class DonaturController extends BaseController
{
    protected $donaturModel;

    public function __construct()
    {
        $this->donaturModel = new DonaturModel();
    }

    // Fungsi Menampilkan Data
    public function index()
    {
        $data['donatur'] = $this->donaturModel->findAll();
        return view('donatur/index', $data);
    }

    // Fungsi Tambah Data
    public function tambah()
    {
        $donaturModel = new DonaturModel();

        // Ambil data dari form
        $data = [
            'nama'       => $this->request->getPost('nama'),
            'alamat'     => $this->request->getPost('alamat'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'email'      => $this->request->getPost('email'),
        ];

        // Simpan data ke database
        $donaturModel->insert($data);

        // Redirect atau tampilkan pesan
        return redirect()->to('/donatur/tambah')->with('message', 'Data donatur berhasil ditambahkan.');
    }

    public function hapus($id)
    {
        if ($this->donaturModel->delete($id)) {
            return redirect()->to(base_url('donatur/index'))->with('message', 'Data berhasil dihapus!');
        } else {
            return redirect()->to(base_url('donatur/index'))->with('message', 'Gagal menghapus data!');
        }
    }
    public function create()
    {
        return view('donatur/tambah'); // Menampilkan form input data
    }

    public function store()
    {
        $donaturModel = new DonaturModel();

        // Validasi data (opsional)
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama'       => 'required|min_length[3]',
            'alamat'     => 'required',
            'no_telepon' => 'required|numeric',
            'email'      => 'required|valid_email',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nama'       => $this->request->getPost('nama'),
            'alamat'     => $this->request->getPost('alamat'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'email'      => $this->request->getPost('email'),
        ];

        // Simpan data ke database
        $donaturModel->insert($data);

        // Redirect dengan pesan sukses
        return redirect()->to('/donatur/tambah')->with('message', 'Data donatur berhasil ditambahkan.');
  
    }
    public function edit($id)
    {
        $donaturModel = new DonaturModel();

        // Ambil data berdasarkan ID
        $data['donatur'] = $donaturModel->find($id);

        if (!$data['donatur']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException(message: 'Data donatur tidak ditemukan.');
        }

        // Tampilkan form edit
        return view('donatur/edit', $data);
    }

    public function update($id)
    {
        $donaturModel = new DonaturModel();

        // Validasi data (opsional)
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama'       => 'required|min_length[3]',
            'alamat'     => 'required',
            'no_telepon' => 'required|numeric',
            'email'      => 'required|valid_email',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nama'       => $this->request->getPost('nama'),
            'alamat'     => $this->request->getPost('alamat'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'email'      => $this->request->getPost('email'),
        ];

        // Update data di database
        $donaturModel->update($id, $data);

        // Redirect dengan pesan sukses
        return redirect()->to('/donatur/index')->with('message', 'Data donatur berhasil diperbarui.');
    }
}
