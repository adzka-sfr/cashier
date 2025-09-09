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
    <div class="bg-dark text-white" style="width: 170px; min-height: 100vh;">
        <h4 style="padding-top: 13px; padding-left: 15px;"><img src="<?php echo base_url('assets/images/brand-logo.png'); ?>" alt="brand-logo" style="width: 30px;"> Cassy</h4>
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item mb-1">
                <a href="#" class="nav-link menu-sidebar text-white<?php echo ($_GET['page'] ?? '') === 'home' ? ' bg-primary' : ''; ?>">📊 Home</a>
            </li>
            <li class="nav-item mb-1">
                <a href="#" class="nav-link menu-sidebar text-white<?php echo ($_GET['page'] ?? '') === 'transaksi' ? ' bg-primary' : ''; ?>">💳 Transaksi</a>
            </li>
            <li class="nav-item mb-1">
                <a href="#" class="nav-link menu-sidebar text-white<?php echo ($_GET['page'] ?? '') === 'stok' ? ' bg-primary' : ''; ?>">📦 Stok Barang</a>
            </li>
            <li class="nav-item mb-1">
                <a href="#" class="nav-link menu-sidebar text-white<?php echo ($_GET['page'] ?? '') === 'riwayat' ? ' bg-primary' : ''; ?>">📜 Riwayat</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link menu-sidebar text-white<?php echo ($_GET['page'] ?? '') === 'pengaturan' ? ' bg-primary' : ''; ?>">⚙ Pengaturan</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center border-bottom p-3">
            <h5 class="mb-0"></h5>
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

                <!-- Produk Flex -->
                <div class="d-flex flex-wrap gap-3">
                    <div class="card text-center" style="width: 161px;">
                        <img src="<?php echo base_url('assets/images/brand-logo.png'); ?>" style="height: 80px; object-fit: contain;" class="card-img-top mx-auto mt-2" alt="Produk 1">
                        <div class="card-body p-2">
                            <p class="mb-1">Kopi</p>
                            <small>Rp 12.000</small>
                        </div>
                    </div>
                    <div class="card text-center" style="width: 161px;">
                        <img src="<?php echo base_url('assets/images/brand-logo.png'); ?>" style="height: 80px; object-fit: contain;" class="card-img-top mx-auto mt-2" alt="Produk 1">
                        <div class="card-body p-2">
                            <p class="mb-1">Kopi</p>
                            <small>Rp 12.000</small>
                        </div>
                    </div>
                    <div class="card text-center" style="width: 161px;">
                        <img src="<?php echo base_url('assets/images/brand-logo.png'); ?>" style="height: 80px; object-fit: contain;" class="card-img-top mx-auto mt-2" alt="Produk 1">
                        <div class="card-body p-2">
                            <p class="mb-1">Kopi</p>
                            <small>Rp 12.000</small>
                        </div>
                    </div>
                    <div class="card text-center" style="width: 161px;">
                        <img src="<?php echo base_url('assets/images/brand-logo.png'); ?>" style="height: 80px; object-fit: contain;" class="card-img-top mx-auto mt-2" alt="Produk 1">
                        <div class="card-body p-2">
                            <p class="mb-1">Kopi</p>
                            <small>Rp 12.000</small>
                        </div>
                    </div>
                    <div class="card text-center" style="width: 161px;">
                        <img src="<?php echo base_url('assets/images/brand-logo.png'); ?>" style="height: 80px; object-fit: contain;" class="card-img-top mx-auto mt-2" alt="Produk 1">
                        <div class="card-body p-2">
                            <p class="mb-1">Kopi</p>
                            <small>Rp 12.000</small>
                        </div>
                    </div>
                    <!-- Tambahkan produk lain di sini dengan card yang sama -->
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