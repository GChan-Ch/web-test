<?php
$query = "SELECT max(kode_ruang) as maxKode FROM tb_ruang";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kode_ruang = $data['maxKode'];
$noUrut = (int) substr($kode_ruang, 3, 3);
$noUrut++;

$char = "KR";
$kode_ruang = $char . sprintf("%03s", $noUrut);
?><div class="panel panel-default">
<div class="panel-heading">
        Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">
                                    
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Id Ruang</label>
                                            <input class="form-control" name="id_ruang" />
                                            

                                        <div class="form-group">
                                            <label>Nama Ruang</label>
                                            <input class="form-control" name="nama_ruang" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kode Ruang</label>
                                            <input class="form-control" name="kode_ruang" value="<?php echo $kode_ruang; ?>" />
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
 
        $id_ruang = $_POST ['id_ruang'];
        $nama_ruang = $_POST ['nama_ruang'];
        $kode_ruang = $_POST ['kode_ruang'];
        $keterangan = $_POST ['keterangan'];
        

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("insert into tb_ruang (id_ruang,nama_ruang,kode_ruang,keterangan)values('$id_ruang','$nama_ruang','$kode_ruang','$keterangan')");

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
