<?php
include '../_header.php';
?>


<!-- <div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-12" style="background-color:#12192A; color:white; font-size:24px; font-weight:bold;">
            Dashboard
        </div>
    </div>
</div> -->

<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3" style="width: 250px; min-height: 100vh;">
        <h4 class="mb-4">🟦 Cassy</h4>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link text-white">📊 Dashboard</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link text-white">💳 Transaksi</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link text-white">📦 Stok Barang</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link text-white">📜 Riwayat</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white">⚙ Pengaturan</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center border-bottom p-3">
            <h5 class="mb-0">Toko Saya</h5>
            <div>
                <button class="btn btn-sm btn-light">⚙</button>
                <button class="btn btn-sm btn-light">👤 Engia</button>
            </div>
        </div>

        <!-- Content Body -->
        <div class="row g-0">
            <!-- Produk -->
            <div class="col-md-8 p-3">
                <h6>Produk</h6>
                <div class="d-flex mb-3">
                    <input type="text" class="form-control me-2" placeholder="Cari produk">
                    <button class="btn btn-outline-secondary">Minuman</button>
                </div>

                <!-- Grid Produk -->
                <div class="row g-3">
                    <div class="col-6 col-md-4">
                        <div class="card text-center">
                            <img src="https://via.placeholder.com/150" class="card-img-top">
                            <div class="card-body p-2">
                                <p class="mb-1">Kopi</p>
                                <small>Rp 12.000</small>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan produk lain... -->
                </div>
            </div>

            <!-- Keranjang -->
            <div class="col-md-4 border-start p-3">
                <h6>Keranjang</h6>
                <div class="d-flex justify-content-between border-bottom py-2">
                    <span>Teh</span>
                    <span>Rp 9.000</span>
                </div>
                <div class="d-flex justify-content-between border-bottom py-2">
                    <span>Oreo x2</span>
                    <span>Rp 9.000</span>
                </div>
                <div class="d-flex justify-content-between border-bottom py-2">
                    <strong>Total</strong>
                    <strong>Rp 25.000</strong>
                </div>
                <button class="btn btn-primary w-100 mt-3">Bayar</button>
            </div>
        </div>
    </div>
</div>



<?php
include '../_footer.php';
?>