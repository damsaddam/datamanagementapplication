<?php
require_once "auth/config/config.php";
require "assets/libraries/vendor/autoload.php";

if (!isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url('auth/login.php') . "'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/simple-sidebar.css'); ?>" rel="stylesheet">

    <!-- CKEditor -->
    <link href="<?= base_url('assets/libraries/vendor/ckeditor\ckeditor/contents.css'); ?>" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Data Tables -->
    <link href="<?= base_url('assets/libraries/DataTables/datatables.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/libraries/DataTables/datatables.css'); ?>" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/img/hospital_image.png">

    <style>
        .sidebar-brand {
            color: rgb(0, 255, 255);
            text-align: center;
            padding-bottom: 25px;
            font-family: 'Barlow', sans-serif;
            font-weight: bold;
        }

        .sidebar-nav li a {
            color: white;
            font-size: 22px;
            font-family: 'Barlow', sans-serif;
            padding: 0;
            margin: 0 0 45px 0;
        }

        .sidebar-nav li a:hover {
            color: black;
        }

        .sidebar-nav li .logout {
            color: rgb(255, 47, 47);
        }

        .sidebar-nav li .logout:hover {
            color: #F32424;
        }

        i {
            padding-right: 10px;
        }

        .box {
            text-align: justify;
        }

        .box ul {
            position: relative;
        }

        .box ul li {
            width: 100%;
            transition: transform 0.5s;
        }

        .box ul li:hover {
            transform: scale(1.2);
            z-index: 2;
            background: rgb(0, 255, 255);
        }

        #page-content-wrapper {
            padding: 8px;
            margin: 0;
            border: 0px;
        }
    </style>
</head>

<body>
    <!-- CKEditor -->
    <script src="<?= base_url('assets/libraries/vendor/ckeditor\ckeditor/ckeditor.js') ?>"></script>

    <!-- Bootstrap -->
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>

    <!-- Data Tables -->
    <script src="<?= base_url('assets/libraries/DataTables/datatables.min.js') ?>"></script>
    <script src="<?= base_url('assets/libraries/DataTables/datatables.js') ?>"></script>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <h2 class="sidebar-brand">PRIMA UTAMA MEDIKA</h2>
            <div class="box">
                <ul class="sidebar-nav">
                    <li>
                        <a href="<?= base_url('dashboard') ?>"><i class="bi bi-house-door-fill"></i>DASHBOARD</a>
                    </li>
                    <li>
                        <a href="<?= base_url('dokter') ?>"><i class="bi bi-people"></i>DATA DOKTER</a>
                    </li>
                    <li>
                        <a href="<?= base_url('pasien') ?>"><i class="bi bi-person-vcard-fill"></i></i>DATA PASIEN</a>
                    </li>
                    <li>
                        <a href="<?= base_url('rekammedis') ?>"><i class="bi bi-lungs-fill"></i>REKAM MEDIS</a>
                    </li>
                    <li>
                        <a class="logout" href="<?= base_url('auth/logout.php') ?>"><i class="bi bi-door-open"></i>LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">