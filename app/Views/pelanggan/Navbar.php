<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pelanggan</title>
    <link rel="stylesheet" href="css/pelanggan.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?= base_url('/customer/dashboard') ?>">Beranda</a></li>
                <li><a href="<?= base_url('/customer/layanan') ?>">service</a></li>
                <li><a href="<?= base_url('/customer/product') ?>">produk</a></li>
                <li><a href="<?= base_url('/customer/review') ?>">Ulasan</a></li>
                <li><a href="<?= base_url('/customer/profile') ?>">Profil</a></li>
            </ul>
        </nav>
    </header>
<?= $this->renderSection('content') ?>