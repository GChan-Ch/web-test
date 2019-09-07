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
                                            <label>ID Inventaris</label>
                                            <input class="form-control" name="id_inventaris" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input class="form-control" name="nama_barang" value="<?php echo $tampil['nama_barang'];?>" readonly />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kondisi</label>
                                            <input class="form-control" name="kondisi_barang" value="<?php echo $tampil['kondisi_barang'];?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Asal Barang</label>
                                            <input class="form-control" name="asal_barang" />
                                        </div>

                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" name="harga" value="<?php echo $tampil['harga'];?>" readonly />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['jumlah'];?>" readonly />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Spesifikai</label>
                                            <input class="form-control" name="spesifikasi" value="<?php echo $tampil['spesifikasi'];?>" readonly />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label readonly >
                                            <select class="form-control" name="kategori" readonly >
                                                <option value="Barang Pakai habis" <?php if ($kategori=='Barang Pakai habis') {echo "selected";} ?>>Barang Pakai habis</option>
                                                <option value="Barang Tetap" <?php if ($kategori=='Barang Tetap') {echo "selected";} ?> >Barang Tetap</option>
                                            </select> 
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input class="form-control" name="keterangan" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>ID Jenis</label>
                                            <input class="form-control" name="id_jenis" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Reg</label>
                                            <input class="form-control" name="tanggal_register" type="date" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>ID Ruang</label>
                                            <input class="form-control" name="id_ruang" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>ID Petugas</label>
                                            <input class="form-control" name="id_petugas" value="<?php echo $tampil['id_petugas'];?>" readonly />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kode Sarpras</label>
                                            <input class="form-control" name="kode_sarpras" value="<?php echo $tampil['kode_sarpras'];?>" readonly />
                                            
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
 
        $no = $_POST ['no'];
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

            $sql = $koneksi->query("insert into tb_inventaris (no,id_inventaris,nama_barang,kondisi_barang,asal_barang,harga,jumlah,spesifikasi,kategori,keterangan,id_jenis,tanggal_register,id_ruang,id_petugas,kode_sarpras)values('$no','$id_inventaris', '$nama_barang', '$kondisi_barang', '$asal_barang', '$harga', '$jumlah', '$spesifikasi', '$kategori', '$keterangan', '$id_jenis', '$tanggal_register', '$id_ruang', '$id_petugas', '$kode_sarpras')");

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