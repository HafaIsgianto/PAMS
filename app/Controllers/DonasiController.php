<?php

namespace App\Controllers;

use App\Models\ModelDonasiUang;
use App\Models\ModelDonasiBarang;

class DonasiController extends BaseController
{
    private $modelDonasiUang;
    private $modelDonasiBarang;

    public function __construct()
    {
        $this->modelDonasiUang = new ModelDonasiUang();
        $this->modelDonasiBarang = new ModelDonasiBarang();
    }

    // Tampilkan data
    public function donasiuang()
    {
        $data['donasi_uang'] = $this->modelDonasiUang->findAll();
        return view('donasi/indexuang', $data);
    }
    public function donasibarang()
    {
        $data['donasi_barang'] = $this->modelDonasiBarang->findAll();
        return view('donasi/indexbarang', $data);
    }
    public function donasiuanguser()
    {
        $data['donasi_uang'] = $this->modelDonasiUang->findAll();
        return view('user/donasi/indexuang', $data);
    }
    public function donasibaranguser()
    {
        $data['donasi_barang'] = $this->modelDonasiBarang->findAll();
        return view('user/donasi/indexbarang', $data);
    }
    // Tampilkan form tambah/edit donasi uang
    public function formDonasiUang($id = null)
    {
        $data['donasi'] = $id ? $this->modelDonasiUang->find($id) : null;
        return view('donasi/form_donasi_uang', $data);
    }
    public function formDonasiUangUser($id = null)
    {
        $data['donasi'] = $id ? $this->modelDonasiUang->find($id) : null;
        return view('user/donasi/form_donasi_uang', $data);
    }

    // Simpan data donasi uang
    public function saveDonasiUang()
    {
        $this->modelDonasiUang->save([
            'id' => $this->request->getPost('id'),
            'id_donatur' => $this->request->getPost('id_donatur'),
            'jumlah' => $this->request->getPost('jumlah'),
            'tanggal' => $this->request->getPost('tanggal'),
            'keterangan' => $this->request->getPost('keterangan'),
        ]);
        return redirect()->to('/donasi_uang');
    }

    // Hapus data donasi uang
    public function deleteDonasiUang($id)
    {
        $this->modelDonasiUang->delete($id);
        return redirect()->to('/donasi_uang');
    }

    // Tampilkan form tambah/edit donasi barang
    public function formDonasiBarang($id = null)
    {
        $data['donasi'] = $id ? $this->modelDonasiBarang->find($id) : null;
        return view('donasi/form_donasi_barang', $data);
        
    }
    public function formDonasiBarangUser($id = null)
    {
        $data['donasi'] = $id ? $this->modelDonasiBarang->find($id) : null;
        return view('user/donasi/form_donasi_barang', $data);
        
    }

    // Simpan data donasi barang
    public function saveDonasiBarang()
    {
        $this->modelDonasiBarang->save([
            'id' => $this->request->getPost('id'),
            'id_donatur' => $this->request->getPost('id_donatur'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah' => $this->request->getPost('jumlah'),
            'tanggal' => $this->request->getPost('tanggal'),
            'keterangan' => $this->request->getPost('keterangan'),
        ]);
        return redirect()->to('/donasi_barang');
    }

    // Hapus data donasi barang
    public function deleteDonasiBarang($id)
    {
        $this->modelDonasiBarang->delete($id);
        return redirect()->to('/donasi_barang');
    }
}
