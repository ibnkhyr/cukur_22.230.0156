<?php

namespace App\Controllers;

class PelangganController extends BaseController
{
    public function Dashboard()
    {
        return view('pelanggan/dashboard');
    }
    public function Packagess()
    {
        return view('pelanggan/packages');
    }
    public function Custom_menu()
    {
        return view('pelanggan/custom_menu');
    }
    public function Order_history()
    {
        return view('pelanggan/order_history');
    }
    public function Payment()
    {
        return view('pelanggan/payment');
    }
    public function Profile()
    {
        return view('pelanggan/profile');
    }
    
    

    
}