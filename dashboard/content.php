<?php
if ($_GET['page'] == 'home') {
    include '1_home.php';
} elseif ($_GET['page'] == 'transaksi') {
    include '2_transaksi.php';
} elseif ($_GET['page'] == 'stok') {
    include '3_stok.php';
} elseif ($_GET['page'] == 'riwayat') {
    include '4_riwayat.php';
} elseif ($_GET['page'] == 'pengaturan') {
    include '5_pengaturan.php';
} else {
    include '404.php';
}
