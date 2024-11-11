// public/js/menu_detail.js
document.addEventListener("DOMContentLoaded", function () {
    const orderNowBtn = document.getElementById("orderNowBtn");
    const addToCartBtn = document.getElementById("addToCartBtn");

    orderNowBtn.addEventListener("click", function () {
        alert("Pemesanan Anda telah dimulai! Silakan isi detail pemesanan.");
        // Arahkan ke halaman pemesanan (jika ada)
        window.location.href = "/pesan";
    });

    addToCartBtn.addEventListener("click", function () {
        alert("Item telah ditambahkan ke keranjang Anda.");
        // Fungsi untuk menambahkan item ke keranjang (simulasi)
    });
});
