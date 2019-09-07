<?php

    $no = $_GET['no'];

    $sql = $koneksi->query("select * from tb_pegawai where no='$no'");

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
                                            <label>Id Pegawai</label>
                                            <input class="form-control" name="id_pegawai" value="<?php echo $tampil['id_pegawai'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <input class="form-control" name="nama_pegawai" value="<?php echo $tampil['nama_pegawai'];?>" />
                                         
                                         </div>

                                        <div class="form-group">
                                            <label>Nip</label>
                                            <input class="form-control" name="nip" value="<?php echo $tampil['nip'];?>" />
                                            
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
 
        $id_pegawai = $_POST ['id_pegawai'];
        $nama_pegawai = $_POST ['nama_pegawai'];
        $nip = $_POST ['nip'];
        $alamat = $_POST ['alamat'];

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("update tb_pegawai set id_pegawai='$id_pegawai',nama_pegawai='$nama_pegawai',nip='$nip',alamat='$alamat' where no='$no'");

            if ($sql) {
                ?>
                    <script type="text/javascript">

                        alert ("Data Berhasil Disimpan");
                        window.location.href="?page=pegawai"; 
                    </script>
                <?php
            }
        }

 ?>           
