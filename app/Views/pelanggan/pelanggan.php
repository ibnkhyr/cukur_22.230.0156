<?= $this->extend('pelanggan/navbar') ?>

<?= $this->section('content') ?>
    <main>
        <h1>Selamat Datang, muhammad ibnu khiyar</h1>
        <p>Lihat status pemesanan terbaru Anda atau buat pemesanan baru.</p>
        <a href="<?= base_url('/customer/layanan') ?>" class="btn-primary">Pesan Layanan Sekarang</a>
        <h2>Notifikasi Terbaru</h2>
        <!-- Notifikasi pemesanan -->
        <ul>
            
                <li></li>
            
        </ul>
    </main>
<?= $this->endSection() ?>
</body>
</html>
