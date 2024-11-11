<?= $this->extend('partials/header_footer') ?>

<?= $this->section('content') ?>

<h1>Your Order History</h1>

<table>
    <tr>
        <th>Order ID</th>
        <th>Date</th>
        <th>Total</th>
        <th>Status</th>
    </tr>
    <tr>
        <td>101</td>
        <td>2024-11-01</td>
        <td>$200</td>
        <td>Completed</td>
    </tr>
</table>

<?= $this->endSection() ?>
