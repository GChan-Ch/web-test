<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">
                                    
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Id Jenis</label>
                                            <input class="form-control" name="id_jenis" />
                                            

                                        <div class="form-group">
                                            <label>Nama Jenis</label>
                                            <input class="form-control" name="nama_jenis" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kode Jenis</label>
                                            <input class="form-control" name="kode_jenis" />
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input class="form-control" name="keterangan" />
                                            
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
 
        $id_jenis = $_POST ['id_jenis'];
        $nama_jenis = $_POST ['nama_jenis'];
        $kode_jenis = $_POST ['kode_jenis'];
        $keterangan = $_POST ['keterangan'];
        

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("insert into tb_jenis (id_jenis,nama_jenis,kode_jenis,keterangan)values('$id_jenis','$nama_jenis','$kode_jenis','$keterangan')");

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
