<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('beranda');
    }

    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function flow()
    {
        return view('flow');
    }
    public function dadmin()
    {
        return view('admin/admin');
    }
    public function dpelanggan()
    {
        return view('pelanggan/pelanggan');
    }
    public function dbarber()
    {
        return view('barber/barber');
    }
    public function layanan()
    {
        return view('pelanggan/pesanan');
    }
}

   

