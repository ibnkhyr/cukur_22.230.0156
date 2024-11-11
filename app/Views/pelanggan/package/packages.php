<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Paket Catering</title>
    <link rel="stylesheet" href="<?= base_url('css/customer.css') ?>">
</head>
<body>
    <div class="container">
    <?= $this->extend('partials/sidebar_pel') ?>

<?= $this->section('content') ?>
    

        <!-- Konten Utama -->
        <main class="main-content">
            <header class="page-header">
                <h1>Paket Catering</h1>
                <p>Pilih paket catering yang Anda inginkan.</p>
            </header>

            <!-- Daftar Paket -->
            <section class="package-list">
                <?php foreach ($packages as $package): ?>
                    <div class="package-card">
                        <a href="<?= base_url('package/' . $package['id']) ?>">
                            <img src="<?= base_url('images/' . $package['image']) ?>" alt="<?= esc($package['name']) ?>" class="package-image">
                            <h3><?= esc($package['name']) ?></h3>
                            <p><?= esc($package['description']) ?></p>
                            <span class="price"><?= esc($package['price']) ?></span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </section>
        </main>
        <?= $this->endSection() ?>
    </div>
</body>
</html>
