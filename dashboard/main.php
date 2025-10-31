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
                <a href="main.php?page=home" class="nav-link menu-sidebar text-white<?php echo ($_GET['page'] ?? '') === 'home' ? ' bg-primary' : ''; ?>">📊 Home</a>
            </li>
            <li class="nav-item mb-1">
                <a href="main.php?page=transaksi" class="nav-link menu-sidebar text-white<?php echo ($_GET['page'] ?? '') === 'transaksi' ? ' bg-primary' : ''; ?>">💳 Transaksi</a>
            </li>
            <li class="nav-item mb-1">
                <a href="main.php?page=stok" class="nav-link menu-sidebar text-white<?php echo ($_GET['page'] ?? '') === 'stok' ? ' bg-primary' : ''; ?>">📦 Stok Barang</a>
            </li>
            <li class="nav-item mb-1">
                <a href="main.php?page=riwayat" class="nav-link menu-sidebar text-white<?php echo ($_GET['page'] ?? '') === 'riwayat' ? ' bg-primary' : ''; ?>">📜 Riwayat</a>
            </li>
            <li class="nav-item">
                <a href="main.php?page=pengaturan" class="nav-link menu-sidebar text-white<?php echo ($_GET['page'] ?? '') === 'pengaturan' ? ' bg-primary' : ''; ?>">⚙ Pengaturan</a>
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
                <button class="btn btn-sm btn-light"><i class="fa-solid fa-power-off"></i></button>
            </div>
        </div>

        <!-- Content Body -->
        <?php
        if (empty($_GET['page'])) {
            $_GET['page'] = "home";
        } else {
            include "content.php";
        }
        ?>
    </div>
</div>
<?php
include '../_footer.php';
?>