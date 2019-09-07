<?php

    $no = $_GET['no'];

    $sql = $koneksi->query("select * from tb_sarpras where no='$no'");

    $tampil = $sql->fetch_assoc();

    $kategori = $tampil ['kategori'];
    

?>


<div class="panel panel-default">
<div class="panel-heading">
        Ubah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">
                                    

                                    <form method="POST">
                                        <div class="form-group">
                                             <label>Kode Sarpras</label>
                                            <input class="form-control" name="kode_sarpras" value="<?php echo $tampil['kode_sarpras'];?>" />
                                            
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
                                            <label>ID Petugas</label>
                                            <input class="form-control" name="id_petugas" value="<?php echo $tampil['id_petugas'];?>" />
                                            
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
 
        $kode_sarpras = $_POST ['kode_sarpras'];
        $nama_barang = $_POST ['nama_barang'];
        $kondisi_barang = $_POST ['kondisi_barang'];
        $harga = $_POST ['harga'];
        $jumlah = $_POST ['jumlah'];
        $spesifikasi = $_POST ['spesifikasi'];
        $kategori = $_POST ['kategori'];
        $id_petugas = $_POST ['id_petugas'];

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("update tb_sarpras set kode_sarpras='$kode_sarpras', nama_barang='$nama_barang', kondisi_barang='$kondisi_barang', harga='$harga', jumlah='$jumlah', spesifikasi='$spesifikasi', kategori='$kategori', id_petugas='$id_petugas' where no='$no'");

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


