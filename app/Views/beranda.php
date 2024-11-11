<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barber Shop</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Link ke Bootstrap jika menggunakan framework ini -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <!-- Navigasi Bar -->
    <nav class="navbar navbar-expand-lg transparent-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo_catering.png" alt="Logo Barber Shop" class="navbar-logo">
                CATERING
            </a>
            <div class="ml-auto">
                <a class="btn btn-outline-light" href="/register">Daftar</a>
                <a class="btn btn-outline-light" href="/login">Login</a>
            </div>
        </div>
    </nav>

    <!-- Jumbotron/Gambar Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/catering1.jpg" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/catering2.png" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/barber3.jpg" alt="Slide 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Area Informasi Kontak dan Media Sosial -->
    <div class="info-section">
        <div class="container-fluid d-flex">
            <div class="info-left text-light">
                <p>WhatsApp: +628123456789</p>
                <p>Alamat: Jl. Contoh No. 123, Kota XYZ</p>
                <p>Jam Operasional: Senin - Sabtu, 09:00 - 20:00</p>
            </div>
            <div class="info-right text-gold">
                <a href="#"><img src="images/tiktok.png" alt="TikTok"></a>
                <p>@CUKURukuk</p>
                <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
                <p>@CUKURukuk</p>
                <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
                <p>@CUKURukuk</p>
            </div>
        </div>
    </div>

    <!-- Area Ucapan Selamat Datang -->
    <div class="welcome-section text-center text-light">
        <h2>Selamat Datang di Nama Barbershop</h2>
        <p>Keterangan singkat tentang barbershop kami. Kami menyediakan layanan potong rambut dan grooming terbaik dengan tenaga profesional.</p>
    </div>

    <!-- Area Pelayanan Kami -->
    <div class="service-section">
        <h3 class="text-center text-light">Pelayanan Kami</h3>
        <div id="serviceCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="service-icons d-flex justify-content-around">
                        <div class="service-icon">
                            <img src="images/haircut.png" alt="Haircut">
                            <p>Haircut</p>
                        </div>
                        <div class="service-icon">
                            <img src="images/beard.jpg" alt="Beard Trim">
                            <p>Beard Trim</p>
                        </div>
                        <div class="service-icon">
                            <img src="images/massage.png" alt="Massage">
                            <p>Massage</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="service-icons d-flex justify-content-around">
                        <div class="service-icon">
                            <img src="images/color.png" alt="Hair Color">
                            <p>Hair Color</p>
                        </div>
                        <div class="service-icon">
                            <img src="images/wash.png" alt="Hair Wash">
                            <p>Hair Wash</p>
                        </div>
                        <div class="service-icon">
                            <img src="images/style.png" alt="Hair Style">
                            <p>Hair Style</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#serviceCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#serviceCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
        <!-- Area Paket dan Harga -->
        <div class="package-section text-center text-light">
        <h3>Paket dan Harga</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="package">
                        <h4>Paket Basic</h4>
                        <p>Potong rambut standar dengan tenaga profesional.</p>
                        <p><strong>Rp 50.000,-</strong></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="package">
                        <h4>Paket Premium</h4>
                        <p>Potong rambut, cuci, dan styling rambut.</p>
                        <p><strong>Rp 100.000,-</strong></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="package">
                        <h4>Paket VIP</h4>
                        <p>Perawatan lengkap: potong rambut, cukur jenggot, dan pijat kepala.</p>
                        <p><strong>Rp 150.000,-</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Area Tamu Spesial -->
    <div class="special-guests-section">
        <h3 class="text-center text-light">Tamu Spesial Kami</h3>
        <div id="guestCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around">
                        <div class="guest">
                            <img src="images/jokowi.jpg" alt="Guest 1" class="rounded-circle guest-photo">
                            <p class="text-light">Tamu 1</p>
                        </div>
                        <div class="guest">
                            <img src="images/budi.jpg" alt="Guest 2" class="rounded-circle guest-photo">
                            <p class="text-light">Tamu 2</p>
                        </div>
                        <div class="guest">
                            <img src="guest3.jpg" alt="Guest 3" class="rounded-circle guest-photo">
                            <p class="text-light">Tamu 3</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        <div class="guest">
                            <img src="guest4.jpg" alt="Guest 4" class="rounded-circle guest-photo">
                            <p class="text-light">Tamu 4</p>
                        </div>
                        <div class="guest">
                            <img src="guest5.jpg" alt="Guest 5" class="rounded-circle guest-photo">
                            <p class="text-light">Tamu 5</p>
                        </div>
                        <div class="guest">
                            <img src="guest6.jpg" alt="Guest 6" class="rounded-circle guest-photo">
                            <p class="text-light">Tamu 6</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#guestCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#guestCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-section text-light">
        <div class="container">
            <div class="row">
                <!-- Tentang Kami -->
                <div class="col-md-4">
                    <h5>Tentang Kami</h5>
                    <p>Kami adalah barbershop yang berdedikasi untuk memberikan pelayanan terbaik kepada pelanggan kami dengan suasana yang nyaman dan stylish.</p>
                </div>
                <!-- Punya Pertanyaan -->
                <div class="col-md-4">
                    <h5>Punya Pertanyaan?</h5>
                    <p>Hubungi kami kapan saja jika Anda memiliki pertanyaan tentang layanan kami.</p>
                </div>
                <!-- Kontak -->
                <div class="col-md-4">
                    <h5>Kontak Kami</h5>
                    <p>WhatsApp: +628123456789</p>
                    <p>Email: info@barbershop.com</p>
                    <p>Alamat: Jl. Contoh No. 123, Kota XYZ</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- Script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
