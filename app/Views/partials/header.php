<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

<header>
    <h1>Admin Panel</h1>
</header>

<nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="orders.php">Pesanan</a>
    <a href="packages.php">Paket</a>
    <a href="menu.php">Menu</a>
    <a href="payments.php">Pembayaran</a>
    <a href="transactions.php">Transaksi</a>
</nav>

<div class="container">

<?= $this->renderSection('content') ?>

</div>

<footer>
    <p style="text-align: center; padding: 20px; background: #333; color: #fff;">
        &copy; <?php echo date('Y'); ?> Catering Service Admin Panel
    </p>
</footer>

</body>
</html>
