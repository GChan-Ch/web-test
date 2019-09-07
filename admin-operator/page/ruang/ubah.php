<?php

    $no = $_GET['no'];

    $sql = $koneksi->query("select * from tb_ruang where no='$no'");

    $tampil = $sql->fetch_assoc();

?>



<div class="panel panel-default">
<div class="panel-heading">
        Ubah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">
                                    

                                    <form method="POST">
                                    <div class="form-group">
                                            <label>Id Ruang</label>
                                            <input class="form-control" name="id_ruang" value="<?php echo $tampil['id_ruang'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Ruang</label>
                                            <input class="form-control" name="nama_ruang" value="<?php echo $tampil['nama_ruang'];?>" />
                                         
                                         </div>

                                        <div class="form-group">
                                            <label>Kode Ruang</label>
                                            <input class="form-control" name="kode_ruang" value="<?php echo $tampil['kode_ruang'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input class="form-control" name="keterangan" value="<?php echo $tampil['keterangan'];?>" />
                                            
                                        </div>

                                        <div>
                                               <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">   
                                        </div>
                                 </div>
                                        
                                 </form>
                              </div>
 </div>
 </div>
 </div>

 <?php
 
        $id_ruang = $_POST ['id_ruang'];
        $nama_ruang = $_POST ['nama_ruang'];
        $kode_ruang = $_POST ['kode_ruang'];
        $keterangan = $_POST ['keterangan'];

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("update tb_ruang set id_ruang='$id_ruang',nama_ruang='$nama_ruang',kode_ruang='$kode_ruang',keterangan='$keterangan' where no='$no'");

            if ($sql) {
                ?>
                    <script type="text/javascript">

                        alert ("Data Berhasil Disimpan");
                        window.location.href="?page=ruang"; 
                    </script>
                <?php
            }
        }

 ?>           
