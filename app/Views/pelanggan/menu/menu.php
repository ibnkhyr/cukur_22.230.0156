<!-- app/Views/menu.php -->
<?= $this->extend('partials/sidebar_pel') ?>

<?= $this->section('content') ?>

<!-- app/Views/menu_list.php -->

<div class="container mt-5">
    <h2 class="mb-4">Daftar Menu Makanan</h2>

    <?php foreach ($categories as $categoryName => $menus): ?>
        <h3 class="text-primary"><?= $categoryName ?></h3>
        <div class="row">
            <?php foreach ($menus as $menu): ?>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="<?= base_url('images/' . $menu['image']) ?>" class="card-img-top" alt="<?= $menu['name'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $menu['name'] ?></h5>
                            <p class="card-text">Rp<?= number_format($menu['price'], 0, ',', '.') ?></p>
                            <p class="card-text"><?= $menu['description'] ?></p>
                            <a href="<?= base_url('menu/detail/' . $menu['id']) ?>" class="btn btn-primary">Lihat Detail</a>
                            <button class="btn btn-success mt-2">Masukan Keranjang</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>






