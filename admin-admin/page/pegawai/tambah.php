<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Tambah Data</h5>
</div>
<div class="widget-content">
          <div class="controls">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Id Pegawai</label>
                                            <input class="form-control" name="id_pegawai" />
                                            

                                        <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <input class="form-control" name="nama_pegawai" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nip</label>
                                            <input class="form-control" name="nip" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" />
                                            
                                        </div>
                                       

                                        <div>
                                               <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">   
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

            $sql = $koneksi->query("insert into tb_pegawai (id_pegawai,nama_pegawai,nip,alamat)values('$id_pegawai','$nama_pegawai','$nip','$alamat')");

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
