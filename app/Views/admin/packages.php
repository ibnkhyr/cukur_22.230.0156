<?= $this->extend('partials/header') ?>

<?= $this->section('content') ?>

<h1>Manage Packages</h1>

<table>
    <tr>
        <th>Package ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Basic Package</td>
        <td>Includes 3 main courses</td>
        <td>$100</td>
        <td><button>Edit</button> <button>Delete</button></td>
    </tr>
</table>

<?= $this->endSection() ?>
