<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PackageController extends BaseController
{
    public function index()
    {
        // Data contoh paket catering (misal data statis)
        $packages = [
            1 => [
                'id' => 1,
                'name' => 'Paket Nasi Liwet',
                'description' => 'Berisi nasi liwet lengkap dengan lauk pauknya...',
                'price' => 'Rp 150,000',
                'image' => 'package1.jpg'
            ],
            2 => [
                'id' => 2,
                'name' => 'Paket Nasi Tumpeng',
                'description' => 'Nasi tumpeng tradisional dengan berbagai lauk pilihan...',
                'price' => 'Rp 200,000',
                'image' => 'package2.jpg'
            ],
            // Tambahkan paket lainnya sesuai kebutuhan
        ];

        // Kirim data paket ke view
        return view('pelanggan/package/packages', ['packages' => $packages]);
    }

    public function detail($id)
    {
        // Data contoh paket catering
        $packages = [
            1 => [
                'id' => 1,
                'name' => 'Paket Nasi Liwet',
                'description' => 'Berisi nasi liwet lengkap dengan lauk pauknya...',
                'price' => 'Rp 150,000',
                'image' => 'package1.jpg',
                'menu' => [
                    'Ayam Bakar',
                    'Tahu Goreng',
                    'Tempe Goreng',
                    'Sambal Terasi',
                    'Lalapan Segar',
                    'Nasi Liwet',
                ]
            ],
            2 => [
                'id' => 2,
                'name' => 'Paket Nasi Tumpeng',
                'description' => 'Nasi tumpeng tradisional dengan berbagai lauk pilihan...',
                'price' => 'Rp 200,000',
                'image' => 'package2.jpg',
                'menu' => [
                    'Nasi Tumpeng',
                    'Ayam Goreng',
                    'Perkedel Kentang',
                    'Telur Pindang',
                    'Sambal',
                    'Lalapan Segar',
                ]
            ],
            // Tambahkan paket lainnya sesuai kebutuhan
        ];

        if (!isset($packages[$id])) {
            return redirect()->to('/error');
        }

        $data['package'] = $packages[$id];
        return view('pelanggan/package/package-detail', $data);
    }
    public function createOrder($id)
    {
        $data['packageId'] = $id;
        return view('pelanggan/package/create_order', $data);
    }
    public function submitOrder()
    {
        // Ambil data dari form pesanan
        $data = [
            'name' => $this->request->getPost('name'),
            'quantity' => $this->request->getPost('quantity'),
            'address' => $this->request->getPost('address'),
            'schedule' => $this->request->getPost('schedule'),
            'payment' => $this->request->getPost('payment'),
            'package_id' => $this->request->getPost('package_id'),
            'price' => 150000, // contoh harga per paket
        ];

        // Hitung total harga
        $data['total_price'] = $data['price'] * $data['quantity'];

        // Simpan data ke session untuk contoh ini
        session()->set('order', $data);

        // Redirect ke halaman detail pesanan
        return redirect()->to('/package/orderDetail');
    }

    // Method untuk melihat detail pesanan
    public function viewOrder()
    {
        // Ambil data pesanan dari session
        $order = session()->get('order');

        // Jika tidak ada pesanan, redirect ke halaman error
        if (!$order) {
            return redirect()->to('/error');
        }

        return view('pelanggan/package/order_detail', ['order' => $order]);
    }

    // Method untuk konfirmasi pembayaran
    public function confirmPayment()
    {
        // Update status pembayaran di session
        session()->set('order_status', 'paid');

        // Redirect ke halaman sukses pembayaran
        return redirect()->to('/package/paymentSuccess');
    }

    // Method untuk menampilkan halaman sukses pembayaran
    public function paymentSuccess()
    {
        return view('pelanggan/package/payment_success');
    }
}
