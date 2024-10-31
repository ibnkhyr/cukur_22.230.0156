<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barber Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"> <!-- CSS terpisah -->
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                Barber Shop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Lokasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                    <li class="nav-item"><a class="btn btn-login" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Gambar Carousel -->
    <div id="carouselImages" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/barber1.jpg" class="d-block w-100" alt="Barber Image 1">
            </div>
            <div class="carousel-item">
                <img src="images/barber2.jpg" class="d-block w-100" alt="Barber Image 2">
            </div>
            <div class="carousel-item">
                <img src="images/barber3.jpg" class="d-block w-100" alt="Barber Image 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Area Selamat Datang -->
    <section class="welcome-section text-center">
        <h1 class="display-4">Selamat Datang di Barber</h1>
        <p class="lead">Kami menyediakan layanan terbaik untuk penampilan Anda</p>
    </section>

    <!-- Area Layanan -->
    <section class="services-section">
        <div id="carouselServices" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around">
                        <div class="service-item text-center">
                            <img src="images/cukur.jpg" alt="Cukur" class="service-img">
                            <p>Cukur</p>
                        </div>
                        <div class="service-item text-center">
                            <img src="images/semir.jpg" alt="Semir" class="service-img">
                            <p>Semir</p>
                        </div>
                        <div class="service-item text-center">
                            <img src="images/pijat.jpg" alt="Pijat Kepala" class="service-img">
                            <p>Pijat Kepala</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        <div class="service-item text-center">
                            <img src="images/creambath.jpg" alt="Creambath" class="service-img">
                            <p>Creambath</p>
                        </div>
                        <div class="service-item text-center">
                            <img src="images/potong.jpg" alt="Potong Rambut" class="service-img">
                            <p>Potong Rambut</p>
                        </div>
                        <div class="service-item text-center">
                            <img src="images/shaving.jpg" alt="Shaving" class="service-img">
                            <p>Shaving</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselServices" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselServices" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Setelah area layanan -->
     <section>
        <!-- Setelah area layanan -->
<div class="container mt-5">
    <h2 class="text-center">Paket & Harga</h2>
    <div class="d-flex justify-content-center mb-4">
        <button class="btn btn-package active">Reguler</button>
        <button class="btn btn-package">Premiere</button>
    </div>

    <div class="row">
        <!-- Paket Reguler -->
        <div class="col-md-6">
            <h4>Gentlemen Grooming</h4>
            <p class="price">60k - 70k</p>
            <p>A complete men’s grooming service...</p>
        </div>
        <div class="col-md-6">
            <h4>Kids Haircut</h4>
            <p class="price">60k - 70k</p>
            <p>Pengalaman potong rambut yang ramah dan nyaman...</p>
        </div>
    </div>
</div>

<!-- Area Tamu Spesial -->
<div class="container mt-5">
    <h2 class="text-center">Tamu Spesial</h2>
    <div class="special-guests-carousel">
        <div class="guest">
            <img src="/assets/images/guest1.jpg" alt="Guest 1">
            <p class="guest-name">Nama Tamu 1</p>
        </div>
        <div class="guest">
            <img src="/assets/images/guest2.jpg" alt="Guest 2">
            <p class="guest-name">Nama Tamu 2</p>
        </div>
        <div class="guest">
            <img src="/assets/images/guest3.jpg" alt="Guest 3">
            <p class="guest-name">Nama Tamu 3</p>
        </div>
    </div>
</div>

     </section>


    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2024 Barber Shop. All rights reserved.</p>
            <p>Alamat: Jalan Raya Barber No. 123, Jakarta, Indonesia</p>
            <p>Kontak: +62 123 456 789</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
