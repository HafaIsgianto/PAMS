<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use App\Models\ModelDonasiUang;
use App\Models\ModelDonasiBarang;

class KwitansiController extends BaseController
{
    public function cetakKwitansiBarang($id)
    {
        // Load data donasi barang berdasarkan ID
        $barangModel = new ModelDonasiBarang();
        $data['donasi'] = $barangModel->find($id);

        if (!$data['donasi']) {
            return redirect()->to('/')->with('error', 'Data donasi barang tidak ditemukan.');
        }

        // Load HTML untuk PDF
        $html = view('kwitansi/donasi_barang_pdf', $data);

        // Instansiasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A5', 'portrait'); // Ukuran kertas A5
        $dompdf->render();

        // Output file ke browser
        $dompdf->stream('Kwitansi_Donasi_Barang.pdf', ["Attachment" => false]);
    }

    public function cetakKwitansiUang($id)
    {
        // Load data donasi uang berdasarkan ID
        $uangModel = new ModelDonasiUang();
        $data['donasi'] = $uangModel->find($id);

        if (!$data['donasi']) {
            return redirect()->to('/')->with('error', 'Data donasi uang tidak ditemukan.');
        }

        // Load HTML untuk PDF
        $html = view('kwitansi/donasi_uang_pdf', $data);

        // Instansiasi Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A5', 'portrait'); // Ukuran kertas A5
        $dompdf->render();

        // Output file ke browser
        $dompdf->stream('Kwitansi_Donasi_Uang.pdf', ["Attachment" => false]);
    }
}

