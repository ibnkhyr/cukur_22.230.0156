<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Barber</title>
    <link rel="stylesheet" href="css/barber.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?= base_url('/barber/dashboard') ?>">Beranda</a></li>
                <li><a href="<?= base_url('/barber/schedule') ?>">Jadwal Kerja</a></li>
                <li><a href="<?= base_url('/barber/bookings') ?>">Pemesanan</a></li>
                <li><a href="<?= base_url('/barber/reviews') ?>">Ulasan</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Dashboard Barber</h1>
        <h2>Pemesanan Terbaru</h2>
        <ul>
            
                <li>Pelanggan: , Layanan: , Waktu: </li>
            
        </ul>
    </main>
</body>
</html>
