<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function adminDashboard()
    {
        return view('layout/v_wrapper'); // Halaman dashboard admin
    }

    public function userDashboard()
    {
        return view('user/layout/v_wrapper'); // Halaman dashboard user
    }
    public function profil(){
        return view('profil/v_profil');

    }
    public function profiluser(){
        return view('user/profil/v_profil');

    }
}
