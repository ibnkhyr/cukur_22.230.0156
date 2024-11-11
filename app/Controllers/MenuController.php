<?php

namespace App\Controllers;



class MenuController extends BaseController
{
    public function index()
    {
        // Data menu makanan (contoh untuk testing)
        $menus = [
            [
                "id" => 1,
                "name" => "Nasi Kotak Ayam",
                "price" => 20000,
                "image" => "nasi_kotak_ayam.jpg",
                "description" => "Nasi kotak dengan ayam goreng, sambal, dan lalapan.",
                "category" => "Nasi Kotak"
            ],
            [
                "id" => 2,
                "name" => "Nasi Kotak Ikan",
                "price" => 25000,
                "image" => "nasi_kotak_ikan.jpg",
                "description" => "Nasi kotak dengan ikan bakar, sambal, dan lalapan.",
                "category" => "Nasi Kotak"
            ],
            [
                "id" => 3,
                "name" => "Nasi Tumpeng Mini",
                "price" => 50000,
                "image" => "nasi_tumpeng_mini.jpg",
                "description" => "Nasi tumpeng ukuran mini dengan lauk lengkap.",
                "category" => "Nasi Tumpeng"
            ],
            [
                "id" => 4,
                "name" => "Nasi Tumpeng Besar",
                "price" => 150000,
                "image" => "nasi_tumpeng_besar.jpg",
                "description" => "Nasi tumpeng ukuran besar untuk 10 orang.",
                "category" => "Nasi Tumpeng"
            ]
        ];

        // Mengelompokkan menu berdasarkan kategori
        $categories = [];
        foreach ($menus as $menu) {
            $categories[$menu['category']][] = $menu;
        }

        return view('pelanggan/menu/menu', ['categories' => $categories]);
    }

    public function detail($id)
    {
        // Contoh data detail makanan berdasarkan ID (testing)
        $menu = [
            "id" => $id,
            "name" => "Nasi Kotak Ayam",
            "price" => 20000,
            "image" => "nasi_kotak_ayam.jpg",
            "description" => "Nasi kotak dengan ayam goreng, sambal, dan lalapan.",
            "details" => "Menu cocok untuk acara kecil maupun besar."
        ];

        return view('pelanggan/menu/detail_menu', ['menu' => $menu]);
    }
}
