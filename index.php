<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'] . '/cashier/config/connect.php'; // local
// require_once $_SERVER['DOCUMENT_ROOT'] . '/config/connect.php'; // hosting
$user = require_once base_path('config/check_cookie.php');
// Redirect to the apps if the user is authenticated
echo "<script>window.location='" . base_url('dashboard') . "';</script>";
