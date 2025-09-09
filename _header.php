<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/cashier/config/connect.php'; // local
require_once $_SERVER['DOCUMENT_ROOT'] . '/cashier/config/check_cookie.php'; // local
// require_once $_SERVER['DOCUMENT_ROOT'] . '/config/connect.php'; // hosting
// require_once $_SERVER['DOCUMENT_ROOT'] . '/config/check_cookie.php'; // hosting
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cassy</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- SweetAlert CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- ECharts JS -->
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.2/dist/echarts.min.js"></script>
    <style>
        /* button */
        .btn-primary {
            --bs-btn-bg: #02AEB6;
            /* base */
            --bs-btn-border-color: #02AEB6;

            --bs-btn-hover-bg: #029aa1;
            /* sedikit lebih gelap */
            --bs-btn-hover-border-color: #029aa1;

            --bs-btn-active-bg: #017d83;
            /* lebih pekat untuk active */
            --bs-btn-active-border-color: #017d83;

            --bs-btn-disabled-bg: #02AEB6;
            --bs-btn-disabled-border-color: #02AEB6;

            --bs-btn-focus-shadow-rgb: 2, 174, 182;
            /* efek glow saat focus */
        }

        /* background */
        .bg-primary {
            background-color: #02AEB6 !important;
        }

        /* menu-sidebar */
        .menu-sidebar {
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .menu-sidebar:hover {
            background-color: #029aa1;
            text-decoration: none;
        }
    </style>
</head>

<body>