<?= $this->extend('partials/header_footer') ?>

<?= $this->section('content') ?>

<h1>Your Profile</h1>

<form action="update_profile.php" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="John Doe">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" value="johndoe@example.com">
    <label for="address">Address</label>
    <input type="text" id="address" name="address" value="123 Main Street">
    <button type="submit">Update Profile</button>
</form>

<?= $this->endSection() ?>
