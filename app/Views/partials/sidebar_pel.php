<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Paket Catering</title>
    <link rel="stylesheet" href="<?= base_url('css/customer.css') ?>">
    <!-- Tambahkan link ke Bootstrap CSS di layout utama -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/menu.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/menu_detail.css') ?>">
<script src="<?= base_url('js/menu_detail.js') ?>"></script>



</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <h2>Catering</h2>
            </div>
            <nav class="menuside">
                <a href="<?= base_url('pelanggan-dashboard') ?>" class="menuside-item">Home</a>
                <a href="<?= base_url('pelanggan-packages') ?>" class="menuside-item">Paket Catering</a>
                <a href="<?= base_url('pelanggan-menu') ?>" class="menuside-item">Custom Paket</a>
                <a href="#" class="menuside-item">Pesanan</a>
                <a href="#" class="menuside-item">Pengaturan</a>
                <a href="#" class="menuside-item">Profil</a>
                <a href="#" class="menuside-item">Log out</a>
            </nav>
           
        </aside>
        <?= $this->renderSection('content') ?>
    </div>
</body>
</html>