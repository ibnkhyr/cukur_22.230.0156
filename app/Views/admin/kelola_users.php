<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css"> <!-- Link ke CSS terpisah jika ada -->
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Barber Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin">Dashboard Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Kelola Users</h2>

        <!-- Filter Role Pengguna -->
        <div class="d-flex justify-content-center mb-3">
            <button class="btn btn-outline-primary me-2" onclick="showUsers('pelanggan')">Pelanggan</button>
            <button class="btn btn-outline-primary me-2" onclick="showUsers('barber')">Barber</button>
            <button class="btn btn-outline-primary" onclick="showUsers('admin')">Admin</button>
        </div>

        <!-- Tabel User -->
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="user-table">
                    <!-- Baris data akan ditambahkan secara dinamis -->
                </tbody>
            </table>
        </div>

        <!-- Tombol Tambah User -->
        <div class="text-center mt-4">
            <button class="btn btn-success" onclick="addUser()">Tambah User</button>
        </div>
    </div>

    <!-- Modal Tambah/Edit User -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userModalLabel">Tambah/Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="userForm">
                        <div class="mb-3">
                            <label for="userName" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="userName" required>
                        </div>
                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="userEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="userAddress" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="userAddress" required>
                        </div>
                        <div class="mb-3">
                            <label for="userRole" class="form-label">Role</label>
                            <select class="form-select" id="userRole" required>
                                <option value="pelanggan">Pelanggan</option>
                                <option value="barber">Barber</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fungsi untuk menampilkan user sesuai role
        function showUsers(role) {
            // Misalnya: Ambil data user berdasarkan role dengan AJAX
            // Ini adalah contoh data statis
            const users = [
                { id: 1, name: 'John Doe', email: 'john@example.com', address: 'Jakarta', role: 'pelanggan' },
                { id: 2, name: 'Jane Smith', email: 'jane@example.com', address: 'Bandung', role: 'barber' },
                { id: 3, name: 'Admin A', email: 'admin@example.com', address: 'Surabaya', role: 'admin' }
            ];

            const userTable = document.getElementById('user-table');
            userTable.innerHTML = '';

            users.filter(user => user.role === role).forEach(user => {
                userTable.innerHTML += `
                    <tr>
                        <td>${user.id}</td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>${user.address}</td>
                        <td>${user.role}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" onclick="editUser(${user.id})">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteUser(${user.id})">Hapus</button>
                        </td>
                    </tr>
                `;
            });
        }

        // Fungsi untuk menambah user (membuka modal)
        function addUser() {
            document.getElementById('userForm').reset();
            document.getElementById('userModalLabel').textContent = 'Tambah User';
            const userModal = new bootstrap.Modal(document.getElementById('userModal'));
            userModal.show();
        }

        // Fungsi untuk mengedit user (membuka modal dengan data)
        function editUser(userId) {
            // Ini contoh data untuk diisi ke form edit
            document.getElementById('userName').value = "Contoh Nama";
            document.getElementById('userEmail').value = "contoh@example.com";
            document.getElementById('userAddress').value = "Contoh Alamat";
            document.getElementById('userRole').value = "pelanggan";
            
            document.getElementById('userModalLabel').textContent = 'Edit User';
            const userModal = new bootstrap.Modal(document.getElementById('userModal'));
            userModal.show();
        }

        // Fungsi untuk menghapus user
        function deleteUser(userId) {
            if (confirm("Yakin ingin menghapus user ini?")) {
                // Hapus user berdasarkan ID (gunakan AJAX untuk hapus data pada server)
                alert("User dengan ID " + userId + " telah dihapus.");
            }
        }

        // Menampilkan pelanggan secara default
        document.addEventListener('DOMContentLoaded', () => showUsers('pelanggan'));
    </script>
</body>
</html>
