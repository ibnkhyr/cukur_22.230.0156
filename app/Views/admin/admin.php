<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?= base_url('/admin/dashboard') ?>">Beranda</a></li>
                <li><a href="<?= base_url('/admin/manage_users') ?>">Manajemen Pengguna</a></li>
                <li><a href="<?= base_url('/admin/manage_services') ?>">Manajemen Layanan</a></li>
                <li><a href="<?= base_url('/admin/manage_schedules') ?>">Manajemen Jadwal</a></li>
                <li><a href="<?= base_url('/admin/reports') ?>">Laporan</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Dashboard Admin</h1>
        <div class="overview">
            <h2>Statistik Singkat</h2>
            <p>Jumlah Pengguna: </p>
            <p>Jumlah Barber: </p>
            <p>Total Pemesanan: </p>
            <p>Total Pendapatan: Rp </p>
        </div>
    </main>
</body>
</html>
