<?= $this->extend('partials/header') ?>

<?= $this->section('content') ?>

<h1>Manage Orders</h1>

<table>
    <tr>
        <th>ID Pesanan</th>
        <th>Pelanggan</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>Total</th>
        <th>Actions</th>
    </tr>
    <tr>
        <td>1</td>
        <td>ARI</td>
        <td>2024-11-01</td>
        <td>Pending</td>
        <td>Rp.1.000.000</td>
        <td><button>Verify</button> <button>Details</button></td>
    </tr>
</table>

<?= $this->endSection() ?>
