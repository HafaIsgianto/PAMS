<?php

namespace App\Controllers;

use App\Models\PenghuniModel;

class Penghuni extends BaseController
{
    protected $penghuniModel;

    public function __construct()
    {
        $this->penghuniModel = new PenghuniModel();
    }

    // Tampilkan semua data penghuni
    public function index()
    {
        $data['penghuni'] = $this->penghuniModel->findAll();
        return view('penghuni/index', $data);
    }

    // Form untuk menambahkan data penghuni
    public function create()
    {
        return view('penghuni/create');
    }

    // Simpan data baru ke database
    public function store()
    {
        $this->penghuniModel->save([
            'nama' => $this->request->getPost('nama'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'tanggal_masuk' => $this->request->getPost('tanggal_masuk'),
            'keterangan' => $this->request->getPost('keterangan'),
        ]);

        return redirect()->to('/penghuni');
    }

    // Form untuk mengedit data penghuni
    public function edit($id)
    {
        $data['penghuni'] = $this->penghuniModel->find($id);
        return view('penghuni/edit', $data);
    }

    // Update data penghuni
    public function update($id)
    {
        $this->penghuniModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'tanggal_masuk' => $this->request->getPost('tanggal_masuk'),
            'keterangan' => $this->request->getPost('keterangan'),
        ]);

        return redirect()->to('/penghuni');
    }

    // Hapus data penghuni
    public function delete($id)
    {
        $this->penghuniModel->delete($id);
        return redirect()->to('/penghuni');
    }
}
