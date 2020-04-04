<?php
require_once "_config/config.php";

if(!isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url('auth/login.php')."';</script>";
} ?>  
<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CV Budewa Utama</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>/_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/_assets/css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
    <script src="<?=base_url('_assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?=base_url('dashboard')?>"><span class="text-primary">CV Budewa Utama</b></span></a>
                </li>
                <li>
                    <a href="<?=base_url('dashboard')?>">Dashboard</a>
                </li>
                <li>
                    <a href="<?=base_url('data_pelamar/data.php')?>">Data Pelamar</a>
                </li>
                <li>
                    <a href="<?=base_url('data_berkas_pelamar/data.php')?>">Data Berkas Pelamar</a>
                </li>
                <li>
                    <a href="<?=base_url('nilai_seleksi/data.php')?>">Nilai Seleksi Pelamar</a>
                </li>
                <li>
                    <a href="<?=base_url('auth/logout.php')?>"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
