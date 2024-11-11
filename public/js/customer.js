// Mengambil elemen-elemen yang dibutuhkan
const categoryFilter = document.getElementById('category-filter');
const searchBar = document.getElementById('search-bar');
const packageGrid = document.getElementById('package-grid');
const packageCards = document.querySelectorAll('.package-card');

// Fungsi filter berdasarkan kategori
categoryFilter.addEventListener('change', function () {
    const category = categoryFilter.value;

    packageCards.forEach(card => {
        // Mendapatkan kategori dari setiap card paket
        const cardCategory = card.getAttribute('data-category');

        // Tampilkan atau sembunyikan card berdasarkan kategori
        if (category === 'all' || cardCategory === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});

// Fungsi pencarian
searchBar.addEventListener('input', function () {
    const searchText = searchBar.value.toLowerCase();

    packageCards.forEach(card => {
        const cardTitle = card.querySelector('h2').textContent.toLowerCase();

        // Tampilkan atau sembunyikan card berdasarkan teks pencarian
        if (cardTitle.includes(searchText)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});


// Menambahkan event listener untuk setiap kartu
packageCards.forEach(card => {
    card.addEventListener('click', () => {
        // Arahkan ke halaman detail paket
        window.location.href = 'package-detail.html';
    });
});

