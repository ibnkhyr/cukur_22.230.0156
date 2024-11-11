<?= $this->extend('partials/header') ?>

<?= $this->section('content') ?>

<h1>Manage Payments</h1>

<table>
    <tr>
        <th>Payment ID</th>
        <th>Order ID</th>
        <th>Date</th>
        <th>Amount</th>
        <th>Status</th>
    </tr>
    <tr>
        <td>1</td>
        <td>101</td>
        <td>2024-11-02</td>
        <td>$200</td>
        <td>Paid</td>
    </tr>
</table>

<?= $this->endSection() ?>
