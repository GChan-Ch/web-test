<?php

    $no = $_GET['no'];

    $sql = $koneksi->query("select * from tb_instansi where no='$no'");

    $tampil = $sql->fetch_assoc();

?>



<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Ubah Data</h5>
</div>
<div class="widget-content">
          <div class="controls">
                                    <form method="POST">
                                    <div class="form-group">
                                            <label>No Instansi</label>
                                            <input class="form-control" name="no_instansi" value="<?php echo $tampil['no_instansi'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Instansi</label>
                                            <input class="form-control" name="nama_instansi" value="<?php echo $tampil['nama_instansi'];?>" />
                                         
                                         </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" value="<?php echo $tampil['alamat'];?>" />
                                            
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
 
        $no_instansi = $_POST ['no_instansi'];
        $nama_instansi = $_POST ['nama_instansi'];
        $alamat = $_POST ['alamat'];

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("update tb_instansi set no_instansi='$no_instansi',nama_instansi='$nama_instansi',alamat='$alamat' where no='$no'");

            if ($sql) {
                ?>
                    <script type="text/javascript">

                        alert ("Data Berhasil Disimpan");
                        window.location.href="?page=instansi"; 
                    </script>
                <?php
            }
        }

 ?>           
