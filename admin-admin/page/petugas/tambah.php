<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Tambah Data</h5>
</div>
<div class="widget-content">
          <div class="controls">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>ID Petugas</label>
                                            <input class="form-control" name="id_petugas" />
                                            

                                        <div class="form-group">
                                            <label>Nama Petugas</label>
                                            <input class="form-control" name="nama_petugas" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="usernamw" />
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" />
                                            
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>ID Level</label>
                                            <input class="form-control" name="id_level" />
                                            
                                        </div>

                                        <div>
                                               <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">   
                                        </div>
                                 </div>
                                        
                                 </form>
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

            $sql = $koneksi->query("insert into tb_petugas (id_petugas,nama_petugas,username,password,id_level)values('$id_petugas','$nama_petugas','$username','$password','$id_level')");

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


