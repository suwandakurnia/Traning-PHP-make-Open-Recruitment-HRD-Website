<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1>Edit Nilai Seleksi</h1>
        <h4>
            <small>Edit Nilai Seleksi</small>
            <div class="pull-right">
                <a href ="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
            <?php
            $id = @$_GET['id'];
            $sql_obat = mysqli_query($con, "SELECT * FROM data_pelamar WHERE id_pelamar = '$id'") or die (mysqli_error($con));
            $data = mysqli_fetch_array($sql_obat);
            ?>
            <form action="proses.php" Method="POST">
                <div class="form-group">
                
                <input type="hidden" name="id" value="<?=$data['id_pelamar']?>">
                
                </div>
                <div class="form-group">
                <label for="nilaitestulis">Nilai Tes Tulis :</label>         
                <input type="text" class="form-control" id="nilaitestulis" value="<?=$data['Skor_Tes_Tulis']?>" name="nilaitestulis">
                </div>
                <div class="form-group">
                <label for="nilaiwawancara">Nilai Wawancara :</label>      
                <input type="text" class="form-control" id="nilaiwawancara" value="<?=$data['Skor_Wawancara']?>" name="nilaiwawancara">
                </div>
                <button type="submit" name= "edit" class="btn btn-success"> Simpan </button>
            </form>    
        </div>

    </div>

<?php include_once('../_footer.php'); ?>