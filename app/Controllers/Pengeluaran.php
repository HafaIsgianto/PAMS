<?php

namespace App\Controllers;

use App\Models\PengeluaranModel;
use App\Models\ModelDonasiUang;
class Pengeluaran extends BaseController
{
    protected $pengeluaranModel;

    public function __construct()
    {
        $this->pengeluaranModel = new PengeluaranModel();
        
    }

    // Tampilkan semua data
    public function index()
    {
        $data['pengeluaran'] = $this->pengeluaranModel->findAll();
        return view('pengeluaran/index', $data);
    }

    // Form tambah data
    public function create()
    {
        return view('pengeluaran/create');
    }

    // Simpan data baru
    public function store()
{
    $id_donasi_uang = $this->request->getVar('id_donasi_uang');
    $donasiUangModel = new ModelDonasiUang();

    if (!$donasiUangModel->find($id_donasi_uang)) {
        session()->setFlashdata('error', 'ID Donasi Uang tidak ditemukan.');
        return redirect()->back()->withInput();
    }

    $data = [
        'id_donasi_uang'    => $id_donasi_uang,
        'jenis_pengeluaran' => $this->request->getVar('jenis_pengeluaran'),
        'deskripsi'         => $this->request->getVar('deskripsi'),
        'jumlah'            => $this->request->getVar('jumlah'),
        'tanggal'           => $this->request->getVar('tanggal'),
    ];

    $this->pengeluaranModel->save($data);

    session()->setFlashdata('success', 'Data pengeluaran berhasil ditambahkan.');
    return redirect()->to('/pengeluaran');
}

    // Form edit data
    public function edit($id)
    {
        $data['pengeluaran'] = $this->pengeluaranModel->find($id);
        return view('pengeluaran/edit', $data);
    }

    // Update data
    public function update($id)
    {
        $this->pengeluaranModel->update($id, [
            'id_donasi_uang' => $this->request->getPost('id_donasi_uang'),
            'jenis_pengeluaran' => $this->request->getPost('jenis_pengeluaran'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'jumlah' => $this->request->getPost('jumlah'),
            'tanggal' => $this->request->getPost('tanggal'),
        ]);

        return redirect()->to('/pengeluaran')->with('success', 'Data berhasil diupdate.');
    }

    // Hapus data
    public function delete($id)
    {
        $this->pengeluaranModel->delete($id);
        return redirect()->to('/pengeluaran')->with('success', 'Data berhasil dihapus.');
    }
}
