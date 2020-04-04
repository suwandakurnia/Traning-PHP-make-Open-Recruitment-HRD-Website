<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1>Edit Berkas Seleksi</h1>
        <h4>
            <small>Edit Berkas Seleksi</small>
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
                <label for="CV">CV :</label>         
                <input type="text" class="form-control" id="CV" value="<?=$data['CV']?>" name="CV">
                </div>
                <div class="form-group">
                <label for="Ijazah">Ijazah :</label>      
                <input type="text" class="form-control" id="Ijazah" value="<?=$data['Ijazah']?>" name="Ijazah">
                </div>
                <div class="form-group">
                <label for="Sertifikat_Pendukung">Sertifikat Pendukung :</label>      
                <input type="text" class="form-control" id="Sertifikat_Pendukung" value="<?=$data['Sertifikat_Pendukung']?>" name="Sertifikat_Pendukung">
                </div>
                <div class="form-group">
                <label for="Foto_Terbaru">Foto Terbaru :</label>      
                <input type="text" class="form-control" id="Foto_Terbaru" value="<?=$data['Foto_Terbaru']?>" name="Foto_Terbaru">
                </div>
                <button type="submit" name= "edit" class="btn btn-success"> Simpan </button>
            </form>    
        </div>

    </div>

<?php include_once('../_footer.php'); ?>