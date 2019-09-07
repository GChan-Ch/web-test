<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Tambah Data</h5>
</div>
<div class="widget-content">
          <div class="controls">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>No Instansi</label>
                                            <input class="form-control" name="no_instansi" />
                                            

                                        <div class="form-group">
                                            <label>Nama Instansi</label>
                                            <input class="form-control" name="nama_instansi" />
                                            
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
 
        $no_instansi = $_POST ['no_instansi'];
        $nama_instansi = $_POST ['nama_instansi'];
        $alamat = $_POST ['alamat'];
        

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("insert into tb_instansi (no_instansi,nama_instansi,alamat)values('$no_instansi','$nama_instansi','$alamat')");

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
