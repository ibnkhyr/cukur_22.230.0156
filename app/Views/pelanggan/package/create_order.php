<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pesanan</title>
    <link rel="stylesheet" href="<?= base_url('css/package-create-order.css') ?>">
</head>
<body>
    <div class="order-container">
        <h2>Form Pemesanan</h2>
        <form action="<?= base_url('package/submitOrder') ?>" method="POST">
            <input type="hidden" name="package_id" value="<?= esc($packageId) ?>">
            
            <label for="name">Nama Pelanggan</label>
            <input type="text" id="name" name="name" required>

            <label for="quantity">Jumlah Pesanan</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <label for="address">Alamat Pengiriman</label>
            <textarea id="address" name="address" required></textarea>

            <label for="schedule">Jadwal Pemesanan</label>
            <input type="date" id="schedule" name="schedule" required>

            <label for="payment">Metode Pembayaran</label>
            <select id="payment" name="payment" required>
                <option value="bank_bca">Bank BCA</option>
                <option value="bank_mandiri">Bank Mandiri</option>
                <option value="bank_bri">Bank BRI</option>
                <option value="bank_bni">Bank BNI</option>
            </select>

            <button type="submit" class="submit-button">Kirim Pesanan</button>
        </form>
    </div>
</body>
</html>
