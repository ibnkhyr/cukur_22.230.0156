<?= $this->extend('partials/sidebar_pel') ?>

    <?= $this->section('content') ?>

<h1>Customer Dashboard</h1>

<div class="dashboard-summary">
    <div class="summary-box">
        <h2>Active Orders</h2>
        <p>3</p>
    </div>
    <div class="summary-box">
        <h2>Total Orders</h2>
        <p>10</p>
    </div>
    <div class="summary-box">
        <h2>Total Spent</h2>
        <p>$1,200</p>
    </div>
</div>

<?= $this->endSection() ?>
