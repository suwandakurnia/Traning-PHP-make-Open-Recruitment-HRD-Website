<?php

require_once "../_config/config.php";

if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    
    $CV = trim(mysqli_real_escape_string($con, $_POST['CV']));
    $Ijazah = trim(mysqli_real_escape_string($con, $_POST['Ijazah']));
    $Sertifikat_Pendukung = trim(mysqli_real_escape_string($con, $_POST['Sertifikat_Pendukung']));
    $Foto_Terbaru = trim(mysqli_real_escape_string($con, $_POST['Foto_Terbaru']));
    mysqli_query($con, "UPDATE data_pelamar SET CV = '$CV', Ijazah = '$Ijazah', Sertifikat_Pendukung = '$Sertifikat_Pendukung', Foto_Terbaru = '$Foto_Terbaru' WHERE id_pelamar = '$id'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}

?>