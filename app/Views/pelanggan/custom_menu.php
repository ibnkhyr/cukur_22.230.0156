<?= $this->extend('partials/header_footer') ?>

<?= $this->section('content') ?>

<h1>Create Your Custom Menu</h1>

<form action="submit_custom_order.php" method="post">
    <label for="menu-item">Select Menu Items</label>
    <input type="text" id="menu-item" name="menu-item" placeholder="Enter Menu Item">
    <label for="quantity">Quantity</label>
    <input type="number" id="quantity" name="quantity" placeholder="Enter Quantity">
    <button type="submit">Add to Order</button>
</form>

<?= $this->endSection() ?>
