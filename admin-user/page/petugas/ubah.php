<?php

    $no = $_GET['no'];

    $sql = $koneksi->query("select * from tb_petugas where no='$no'");

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
                                            <label>Id Petugas</label>
                                            <input class="form-control" name="id_petugas" value="<?php echo $tampil['id_petugas'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Petugas</label>
                                            <input class="form-control" name="nama_petugas" value="<?php echo $tampil['nama_petugas'];?>" />
                                         
                                         </div>

                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" value="<?php echo $tampil['username'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" value="<?php echo $tampil['password'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>ID Level</label>
                                            <input class="form-control" name="id_level" value="<?php echo $tampil['id_level'];?>" />
                                            
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
 
        $id_petugas = $_POST ['id_petugas'];
        $nama_petugas = $_POST ['nama_petugas'];
        $username = $_POST ['username'];
        $password = $_POST ['password'];
        $id_level = $_POST ['id_level'];

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("update tb_petugas set id_petugas='$id_petugas',nama_petugas='$nama_petugas',username='$username',password='$password',id_level='$id_level' where no='$no'");

            if ($sql) {
                ?>
                    <script type="text/javascript">

                        alert ("Data Berhasil Disimpan");
                        window.location.href="?page=petugas"; 
                    </script>
                <?php
            }
        }

 ?>           
