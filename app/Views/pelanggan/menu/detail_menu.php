<!-- app/Views/detail_menu.php -->
<?= $this->extend('partials/sidebar_pel') ?>

<?= $this->section('content') ?>
<div class="container detail-page mt-5">
    <div class="card shadow p-4">
        <div class="row">
            <div class="col-md-5">
                <img src="<?= base_url('images/' . $menu['image']) ?>" class="img-fluid rounded" alt="<?= $menu['name'] ?>">
            </div>
            <div class="col-md-7">
                <h2 class="mb-3"><?= $menu['name'] ?></h2>
                <h4 class="text-danger">Rp<?= number_format($menu['price'], 0, ',', '.') ?></h4>
                <p class="mt-3"><?= $menu['description'] ?></p>
                <p class="text-muted"><?= $menu['details'] ?></p>
                
                <div class="d-flex mt-4">
                    <button class="btn btn-success flex-grow-1 mr-2">Pesan Sekarang</button>
                    <button class="btn btn-warning flex-grow-1 ml-2">Masukan Keranjang</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
