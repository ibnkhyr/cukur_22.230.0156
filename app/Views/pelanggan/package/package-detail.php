<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Paket Catering</title>
    <link rel="stylesheet" href="<?= base_url('css/package-detail.css') ?>">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <h2>Catering</h2>
            </div>
            <nav class="menu">
                <a href="<?= base_url('customer') ?>" class="menu-item">Home</a>
                <a href="<?= base_url('customer/packages') ?>" class="menu-item">Paket Catering</a>
                <a href="#" class="menu-item">Custom Paket</a>
                <a href="#" class="menu-item">Pesanan</a>
                <a href="#" class="menu-item">Pengaturan</a>
                <a href="#" class="menu-item">Profil</a>
                <a href="#" class="menu-item">Log out</a>
            </nav>
        </aside>

        <!-- Konten Utama -->
        <main class="main-content">
            <header class="page-header">
                <h1>Detail Paket Catering</h1>
                <p>Berikut adalah rincian dari paket yang Anda pilih.</p>
            </header>

            <!-- Detail Paket -->
            <section class="package-detail">
                <img src="<?= base_url('images/' . $package['image']) ?>" alt="<?= esc($package['name']) ?>" class="package-image">
                <h2><?= esc($package['name']) ?></h2>
                <p><?= esc($package['description']) ?></p>
                <span class="price">Harga: <?= esc($package['price']) ?></span>

                <h3>Daftar Menu:</h3>
                <ul class="menu-list">
                    <?php foreach ($package['menu'] as $menu_item): ?>
                        <li><?= esc($menu_item) ?></li>
                    <?php endforeach; ?>
                </ul>

                <!-- Tombol Pesan -->
                <a href="<?= base_url('package/order/' . $package['id']) ?>" class="order-button">Pesan Sekarang</a>
            </section>
        </main>
    </div>
</body>
</html>
