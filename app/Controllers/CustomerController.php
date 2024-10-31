<?php
namespace App\Controllers;

use App\Models\ProductModel;

class CustomerController extends BaseController {
    public function product() {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();
        return view('pelanggan/product', $data);
    }

    public function addToCart($productId) {
        // Logic to add product to cart
    }
}
