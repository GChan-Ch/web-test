<?php

    $no = $_GET['no'];

    $sql = $koneksi->query("select * from tb_inventaris where no='$no'");

    $tampil = $sql->fetch_assoc();

    $kategori = $tampil ['kategori'];

?>



<<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Ubah Data</h5>
</div>
<div class="widget-content">
          <div class="controls">

                                    <form method="POST">
                                        <div class="form-group">
                                             <label>ID Inventaris</label>
                                            <input class="form-control" name="id_inventaris" value="<?php echo $tampil['id_inventaris'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input class="form-control" name="nama_barang" value="<?php echo $tampil['nama_barang'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kondisi</label>
                                            <input class="form-control" name="kondisi_barang" value="<?php echo $tampil['kondisi_barang'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Asal Barang</label>
                                            <input class="form-control" name="asal_barang" value="<?php echo $tampil['asal_barang'];?>" />
                                        </div>


                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" name="harga" value="<?php echo $tampil['harga'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['jumlah'];?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Spesifikai</label>
                                            <input class="form-control" name="spesifikasi" value="<?php echo $tampil['spesifikasi'];?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="kategori" >
                                                <option value="Barang Pakai habis" <?php if ($kategori=='Barang Pakai habis') {echo "selected";} ?>>Barang Pakai habis</option>
                                                <option value="Barang Tetap" <?php if ($kategori=='Barang Tetap') {echo "selected";} ?> >Barang Tetap</option>
                                            </select> 
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input class="form-control" name="keterangan" value="<?php echo $tampil['keterangan'];?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Register</label>
                                            <input class="form-control" name="tanggal_register" value="<?php echo $tampil['tanggal_register'];?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>ID Ruang</label>
                                            <input class="form-control" name="id_ruang" value="<?php echo $tampil['id_ruang'];?>" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>ID Petugas</label>
                                            <input class="form-control" name="id_petugas" value="<?php echo $tampil['id_petugas'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kode Sarpras</label>
                                            <input class="form-control" name="kode_sarpras" value="<?php echo $tampil['kode_sarpras'];?>" />
                                            
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
 
        $id_inventaris = $_POST ['id_inventaris'];
        $nama_barang = $_POST ['nama_barang'];
        $kondisi_barang = $_POST ['kondisi_barang'];
        $asal_barang = $_POST ['asal_barang'];
        $harga = $_POST ['harga'];
        $jumlah = $_POST ['jumlah'];
        $spesifikasi = $_POST ['spesifikasi'];
        $kategori = $_POST ['kategori'];
        $keterangan = $_POST ['keterangan'];
        $id_jenis = $_POST ['id_jenis'];
        $tanggal_register = $_POST ['tanggal_register'];
        $id_ruang = $_POST ['id_ruang'];
        $id_petugas = $_POST ['id_petugas'];
        $kode_sarpras = $_POST ['kode_sarpras'];

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("update tb_inventaris set id_inventaris='$id_inventaris', nama_barang='$nama_barang', kondisi_barang='$kondisi_barang',asal_barang='$asal_barang', harga='$harga', jumlah='$jumlah', spesifikasi='$spesifikasi', kategori='$kategori',keterangan='$keterangan',  id_jenis='$id_jenis',  tanggal_register='$tanggal_register',  id_ruang='$id_ruang', id_petugas='$id_petugas', kode_sarpras='$kode_sarpras' where no='$no'");

            if ($sql) {
                ?>
                    <script type="text/javascript">

                        alert ("Data Berhasil Disimpan");
                        window.location.href="?page=inventaris"; 
                    </script>
                <?php
            }
        }

 ?>           
