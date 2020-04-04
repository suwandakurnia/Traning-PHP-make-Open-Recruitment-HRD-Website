<?php include_once('../_header.php'); ?>

    <div class="box">
        <h1>Edit Data Pelamar</h1>
        <h4>
            <small>Edit Data Pelamar</small>
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
                <label for="nama">Nama Pelamar :</label>
                <input type="hidden" name="id" value="<?=$data['id_pelamar']?>">
                <input type="text" class="form-control" id="nama" value="<?=$data['nama']?>" name="nama">
                </div>
                <div class="form-group">
                <label for="divisi">Divisi :</label>         
                <input type="text" class="form-control" id="divisi" value="<?=$data['divisi']?>" name="divisi">
                </div>
                <div class="form-group">
                <label for="jabatan">Jabatan :</label>      
                <input type="text" class="form-control" id="jabatan" value="<?=$data['jabatan']?>" name="jabatan">
                </div>
                <div class="form-group">
                <label for="alamat">Alamat :</label>      
                <input type="text" class="form-control" id="alamat" value="<?=$data['alamat']?>" name="alamat">
                </div>
                <div class="form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir :</label>      
                <input type="text" class="form-control" id="pendidikan_terakhir" value="<?=$data['pendidikan_terakhir']?>" name="pendidikan_terakhir">
                </div>
                <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir :</label>      
                <input type="text" class="form-control" id="tempat_lahir" value="<?=$data['tempat_lahir']?>" name="tempat_lahir">
                </div>
                <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir :</label>      
                <input type="text" class="form-control" id="tanggal_lahir" value="<?=$data['tanggal_lahir']?>" name="tanggal_lahir">
                </div>
                <div class="form-group">
                <label for="email">E-Mail :</label>      
                <input type="text" class="form-control" id="email" value="<?=$data['email']?>" name="email">
                </div>
                <div class="form-group">
                <label for="nohp">No. HP :</label>      
                <input type="text" class="form-control" id="nohp" value="<?=$data['nohp']?>" name="nohp">
                </div>
                <button type="submit" name= "edit" class="btn btn-success"> Simpan </button>
            </form>    
        </div>

    </div>

<?php include_once('../_footer.php'); ?>