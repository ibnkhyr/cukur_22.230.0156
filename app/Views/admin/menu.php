<?= $this->extend('partials/header') ?>

<?= $this->section('content') ?>

<h1>Manage Menu</h1>

<table>
    <tr>
        <th>Menu ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Spaghetti</td>
        <td>Main Course</td>
        <td>$10</td>
        <td><button>Edit</button> <button>Delete</button></td>
    </tr>
</table>
<?= $this->endSection() ?>


