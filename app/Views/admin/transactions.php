<?= $this->extend('partials/header') ?>

<?= $this->section('content') ?>

<h1>Transaction Report</h1>

<table>
    <tr>
        <th>Transaction ID</th>
        <th>Order ID</th>
        <th>Date</th>
        <th>Amount</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>1</td>
        <td>101</td>
        <td>2024-11-02</td>
        <td>$200</td>
        <td>Order payment</td>
    </tr>
</table>

<?= $this->endSection() ?>
