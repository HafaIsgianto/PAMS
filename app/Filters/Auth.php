<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Periksa apakah user sudah login
        if (!$session->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'Anda harus login terlebih dahulu!');
        }

        // Periksa role (jika ada argument role)
        if ($arguments && !in_array($session->get('role'), $arguments)) {
            return redirect()->to('/login')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini!');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada aksi setelah
    }
}
