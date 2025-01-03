<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use App\Models\LaporandonaturModel;
use App\Models\LaporandonasiModel;

use App\Models\LaporanpengeluaranModel;
use App\Models\PenghuniModel;
class LaporanController extends BaseController
{
    public function cetakLaporanDonatur()
    {
        // Load model
        $laporanModel = new LaporandonaturModel();

        // Ambil data dari view
        $laporandonatur = $laporanModel->findAll();

        if (empty($laporandonatur)) {
            return redirect()->back()->with('error', 'Data donatur tidak ditemukan!');
        }

        // Load HTML untuk PDF
        $html = view('laporan/laporandonatur_pdf', ['laporandonatur' => $laporandonatur]);

        // Instansiasi Dompdf
        $this->generatePDF($html, 'Laporan_Donatur.pdf', 'portrait');
    }

    public function cetakLaporanDonasi()
    {
        // Load model
        $laporanModel = new LaporandonasiModel();

        // Ambil data dari view
        $laporandonasi = $laporanModel->findAll();

        if (empty($laporandonasi)) {
            return redirect()->back()->with('error', 'Data donasi tidak ditemukan!');
        }

        // Load HTML untuk PDF
        $html = view('laporan/laporandonasi_pdf', ['laporandonasi' => $laporandonasi]);

        // Instansiasi Dompdf
        $this->generatePDF($html, 'Laporan_Donasi.pdf', 'landscape');
    }

    private function generatePDF(string $html, string $filename, string $orientation = 'portrait')
    {
        // Instansiasi Dompdf
        $dompdf = new Dompdf();

        // Muat HTML
        $dompdf->loadHtml($html);

        // Atur ukuran kertas dan orientasi
        $dompdf->setPaper('A4', $orientation);

        // Render HTML menjadi PDF
        $dompdf->render();

        // Output file ke browser
        $dompdf->stream($filename, ["Attachment" => false]);
    }
    public function cetakLaporanPengeluaran()
    {
        // Load model
        $laporanModel = new LaporanpengeluaranModel();

        // Ambil data dari view
        $laporanpengeluaran = $laporanModel->findAll();

        if (empty($laporanpengeluaran)) {
            return redirect()->back()->with('error', 'Data pengeluaran tidak ditemukan!');
        }

        // Load HTML untuk PDF
        $html = view('laporan/laporanpengeluaran_pdf', ['laporanpengeluaran' => $laporanpengeluaran]);

        // Instansiasi Dompdf
        $this->generateP($html, 'Laporan_Pengeluaran.pdf', 'portrait');
    }

    private function generateP(string $html, string $filename, string $orientation = 'portrait')
    {
        // Instansiasi Dompdf
        $dompdf = new Dompdf();

        // Muat HTML
        $dompdf->loadHtml($html);

        // Atur ukuran kertas dan orientasi
        $dompdf->setPaper('A4', $orientation);

        // Render HTML menjadi PDF
        $dompdf->render();

        // Output file ke browser
        $dompdf->stream($filename, ["Attachment" => false]);
    }
    public function cetakLaporanPenghuni()
    {
        // Load model
        $penghuniModel = new PenghuniModel();

        // Ambil data dari tabel penghuni
        $penghuni = $penghuniModel->findAll();

        if (empty($penghuni)) {
            return redirect()->back()->with('error', 'Data penghuni tidak ditemukan!');
        }

        // Load HTML untuk PDF
        $html = view('laporan/laporanpenghuni_pdf', ['penghuni' => $penghuni]);

        // Instansiasi Dompdf
        $this->generates($html, 'Laporan_Penghuni.pdf', 'portrait');
    }

    private function generates(string $html, string $filename, string $orientation = 'portrait')
    {
        // Instansiasi Dompdf
        $dompdf = new Dompdf();

        // Muat HTML
        $dompdf->loadHtml($html);

        // Atur ukuran kertas dan orientasi
        $dompdf->setPaper('A4', $orientation);

        // Render HTML menjadi PDF
        $dompdf->render();

        // Output file ke browser
        $dompdf->stream($filename, ["Attachment" => false]);
    }
}
