<?php

    $no = $_GET['no'];

    $sql = $koneksi->query("select * from tb_jenis where no='$no'");

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
                                            <label>Id Jenis</label>
                                            <input class="form-control" name="id_jenis" value="<?php echo $tampil['id_jenis'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Jenis</label>
                                            <input class="form-control" name="nama_jenis" value="<?php echo $tampil['nama_jenis'];?>" />
                                         
                                         </div>

                                        <div class="form-group">
                                            <label>Kode Jenis</label>
                                            <input class="form-control" name="kode_jenis" value="<?php echo $tampil['kode_jenis'];?>" />
                                            
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
 
        $id_jenis = $_POST ['id_jenis'];
        $nama_jenis = $_POST ['nama_jenis'];
        $kode_jenis = $_POST ['kode_jenis'];
        $keterangan = $_POST ['keterangan'];

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("update tb_jenis set id_jenis='$id_jenis',nama_jenis='$nama_jenis',kode_jenis='$kode_jenis',keterangan='$keterangan' where no='$no'");

            if ($sql) {
                ?>
                    <script type="text/javascript">

                        alert ("Data Berhasil Disimpan");
                        window.location.href="?page=jenis"; 
                    </script>
                <?php
            }
        }

 ?>           
