<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>
    <link rel="stylesheet" href="<?= base_url('css/order-detail.css') ?>">
</head>
<body>
    <div class="order-container">
        <h2>Detail Pesanan</h2>
        <p><strong>Nama Pelanggan:</strong> <?= esc($order['name']) ?></p>
        <p><strong>Jumlah Pesanan:</strong> <?= esc($order['quantity']) ?></p>
        <p><strong>Alamat Pengiriman:</strong> <?= esc($order['address']) ?></p>
        <p><strong>Jadwal Pemesanan:</strong> <?= esc($order['schedule']) ?></p>
        <p><strong>Metode Pembayaran:</strong> <?= esc($order['payment']) ?></p>
        <p><strong>Harga per Paket:</strong> Rp <?= number_format($order['price'], 0, ',', '.') ?></p>
        <p><strong>Total Harga:</strong> Rp <?= number_format($order['total_price'], 0, ',', '.') ?></p>

        <!-- Tombol untuk konfirmasi pembayaran -->
        <a href="<?= base_url('package/confirmPayment') ?>" class="payment-button">Lakukan Pembayaran</a>
    </div>
</body>
</html>
