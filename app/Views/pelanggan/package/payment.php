<?= $this->extend('partials/header_footer') ?>

<?= $this->section('content') ?>

<h1>Payment</h1>

<form action="submit_payment.php" method="post">
    <label for="order-id">Order ID</label>
    <input type="text" id="order-id" name="order-id" placeholder="Enter Order ID">
    <label for="amount">Amount</label>
    <input type="text" id="amount" name="amount" placeholder="Enter Amount">
    <label for="payment-method">Payment Method</label>
    <select id="payment-method" name="payment-method">
        <option value="credit-card">Credit Card</option>
        <option value="bank-transfer">Bank Transfer</option>
    </select>
    <button type="submit">Pay Now</button>
</form>

<?= $this->endSection() ?>
