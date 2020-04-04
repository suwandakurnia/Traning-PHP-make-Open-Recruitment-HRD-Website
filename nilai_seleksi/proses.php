<?php

require_once "../_config/config.php";

if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    
    $nilaitestulis = trim(mysqli_real_escape_string($con, $_POST['nilaitestulis']));
    $nilaiwawancara = trim(mysqli_real_escape_string($con, $_POST['nilaiwawancara']));
    mysqli_query($con, "UPDATE data_pelamar SET Skor_Tes_Tulis = '$nilaitestulis', Skor_Wawancara = '$nilaiwawancara' WHERE id_pelamar = '$id'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}

?>