<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pelanggan.css">
    <title>Document</title>

</head>
<body>
<h1>Product List</h1>
<div class="product-container">
    <?php foreach ($products as $product): ?>
        <div class="product-card">
            <h2><?= $product['name']; ?></h2>
            <p><?= $product['description']; ?></p>
            <button onclick="location.href='/cart/add/<?= $product['id']; ?>'">Add to Cart</button>
        </div>
    <?php endforeach; ?>
</div>

    
</body>
</html>