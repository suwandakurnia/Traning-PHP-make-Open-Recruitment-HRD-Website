<?php include_once('../_header.php'); ?>

    <div class="box">
       <h1>Data Berkas Pelamar</h1>
       <h4>
           <small>Data Berkas Pelamar Open Requirement CV Budewa Utama</small>
           <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"> Refresh </i></a>
           </div>
        </h4>
        <div style="margin-bottom: 20px;">
            <form class="form-inline" action="" method="post">
                <div class="form-group">
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pelamar</th>
                        <th>CV</th>
                        <th>Ijazah</th>
                        <th>Sertifikat Pendukung</th>
                        <th>Foto Terbaru</th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $batas = 8;
                $hal = @$_GET['hal'];
                if(empty($hal)) {
                    $posisi = 0;
                    $hal = 1;
                } else {
                    $posisi = ($hal - 1) * $batas;
                }
                $no = 1;
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                    if($pencarian != '') {
                        $sql = "SELECT * FROM data_pelamar WHERE nama LIKE '%$pencarian%'";
                        $query = $sql;
                        $queryJml = $sql;
                    } else {
                        $query = "SELECT * FROM data_pelamar LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM data_pelamar";
                        $no = $posisi + 1;
                    }
                } else {
                    $query = "SELECT * FROM data_pelamar LIMIT $posisi, $batas";
                    $queryJml = "SELECT * FROM data_pelamar";
                    $no = $posisi + 1;
                }
                $sql_databerkas = mysqli_query($con, $query) or die (mysqli_error($con));
                if(mysqli_num_rows($sql_databerkas) > 0) {
                    while($data = mysqli_fetch_array($sql_databerkas)) { ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$data['nama']?></td>
                            <td><?=$data['CV']?></td>
                            <td><?=$data['Ijazah']?></td>
                            <td><?=$data['Sertifikat_Pendukung']?></td>
                            <td><?=$data['Foto_Terbaru']?></td>
                            <td class="text-center">
                                <a href="edit.php?id=<?=$data['id_pelamar']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="del.php?id=<?=$data['id_pelamar']?>" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                }
                ?>
                </tbody>
            </table>
            </div>
        <?php
        if(isset($_POST['pencarian']) == '') { ?>
             <div style="float:left;">
                <?php
                    $Jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                    echo "Jumlah Data : <b>$Jml</b>";

                ?>
            </div>
            <div style="float:right;">
                <ul class="pagination pagination-sm" style="margin:0">
                    <?php
                    $jml_hal = ceil($Jml / $batas);
                    for ($i=1; $i <= $jml_hal; $i++) {
                        if($i != $hal) {
                            echo "<li><a href=\"?hal=$i\">$i</a></li>";
                        } else {
                            echo "<li class=\"active\"><a>$i</a></li>";
                        }
                    } 
                    ?>
                </ul>
            </div>
            <?php
           
        } else { 
            echo "<div style=\"float:left;\">";
            $Jml = mysqli_num_rows(mysqli_query($con, $queryJml));
            echo "Data Hasil Pencarian : <b>$Jml</b>";
            echo "</div>";
        }
        ?>
    </div>
<?php include_once('../_footer.php'); ?>