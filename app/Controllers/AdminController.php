<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function Dashboard()
    {
        return view('admin/admin');
    }
    public function Utama()
    {
        return view('admin/dashboard');
    }
    public function Orders()
    {
        return view('admin/orders');
    }
    public function Packages()
    {
        return view('admin/packages');
    }
    public function Menu()
    {
        return view('admin/menu');
    }
    public function Payments()
    {
        return view('admin/payments');
    }
    public function Transactions()
    {
        return view('admin/transactions');
    }
    

    
}

   

