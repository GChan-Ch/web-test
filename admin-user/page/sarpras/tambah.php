<?php
$query = "SELECT max(kode_sarpras) as maxKode FROM tb_sarpras";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$kodeBarang = $data['maxKode'];
$noUrut = (int) substr($kodeBarang, 3, 3);
$noUrut++;

$char = "SA";
$kodeBarang = $char . sprintf("%03s", $noUrut);
?>
<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">
                                    
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Kode Sarpras</label>
                                            <input class="form-control" name="kode_sarpras" value="<?php echo $kodeBarang; ?>"/>
                                            

                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input class="form-control" name="nama_barang" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kondisi</label>
                                            <input class="form-control" name="kondisi_barang" />
                                        </div>

                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" name="harga" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Spesifikasi</label>
                                            <input class="form-control" name="spesifikasi" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="kategori" >
                                                <option value="Barang Tetap">Barang Tetap</option>
                                                <option value="Barang Habis Pakai">Barang Habis Pakai</option>
                                            </select> 
                                        </div>

                                        </div>
                                        <div class="form-group">
                                            <label>ID Petugas</label>
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
 
        $kode = $_POST ['kode_sarpras'];
        $nama = $_POST ['nama_barang'];
        $kondisi = $_POST ['kondisi_barang'];
        $harga = $_POST ['harga'];
        $jumlah = $_POST ['jumlah'];
        $spesifikasi = $_POST ['spesifikasi'];
        $kategori = $_POST ['kategori'];
        $id_petugas = $_POST ['id_petugas'];
        

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("insert into tb_sarpras (kode_sarpras,id_petugas,nama_barang,kondisi_barang,harga,jumlah,spesifikasi,kategori)values('$kode', '$id_petugas', '$nama', '$kondisi', '$harga', '$jumlah', '$spesifikasi', '$kategori')");

            if ($sql) {
                ?>
                    <script type="text/javascript">

                        alert ("Data Berhasil Disimpan");
                        window.location.href="?page=sarpras";
                    </script>
                <?php
            }
        }

 ?>           


