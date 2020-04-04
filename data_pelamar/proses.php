<?php

require_once "../_config/config.php";

if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $divisi = trim(mysqli_real_escape_string($con, $_POST['divisi']));
    $jabatan = trim(mysqli_real_escape_string($con, $_POST['jabatan']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $pendidikan_terakhir = trim(mysqli_real_escape_string($con, $_POST['pendidikan_terakhir']));
    $tempat_lahir = trim(mysqli_real_escape_string($con, $_POST['tempat_lahir']));
    $tanggal_lahir = trim(mysqli_real_escape_string($con, $_POST['tanggal_lahir']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $nohp = trim(mysqli_real_escape_string($con, $_POST['nohp']));

    mysqli_query($con, "UPDATE data_pelamar SET nama = '$nama', divisi = '$divisi', jabatan = '$jabatan', alamat = '$alamat', pendidikan_terakhir = '$pendidikan_terakhir', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', email = '$email', nohp = '$nohp' WHERE id_pelamar = '$id'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}

?>