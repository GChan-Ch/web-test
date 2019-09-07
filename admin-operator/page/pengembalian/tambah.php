<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">
                                    
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Id Pengembalian</label>
                                            <input class="form-control" name="id_pengembalian" />
                                            

                                        <div class="form-group">
                                            <label>Id Inventaris</label>
                                            <input class="form-control" name="id_inventaris" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input class="form-control" name=nama_barang />
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" name="jumlah" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Id Pegawai</label>
                                            <input class="form-control" name="id_pegawai" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Id Petugas</label>
                                            <input class="form-control" name="id_petugas" />
                                            
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
 
        $id_pengembalian = $_POST ['id_pengembalian'];
        $id_inventaris = $_POST ['id_inventaris'];
        $nama_barang = $_POST ['nama_barang'];
        $jumlah = $_POST ['jumlah'];
        $id_pegawai = $_POST ['id_pegawai'];
        $id_petugas = $_POST ['id_petugas'];

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("insert into tb_pengembalian (id_pengembalian,id_inventaris,nama_barang,jumlah,id_pegawai,id_petugas)values('$id_pengembalian', '$id_inventaris', '$nama_barang', '$jumlah', '$id_pegawai', '$id_petugas')");
            
            if ($sql) {
                ?>
                    <script type="text/javascript">

                        alert ("Data Berhasil Disimpan");
                        window.location.href="?page=pengembalian";
                    </script>
                <?php
            }
        }

 ?>           
