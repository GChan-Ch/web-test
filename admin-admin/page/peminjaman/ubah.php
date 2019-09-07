<?php

    $no = $_GET['no'];

    $sql = $koneksi->query("select * from tb_peminjaman where no='$no'");

    $tampil = $sql->fetch_assoc();

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
                                            <label>Id Pinjam</label>
                                            <input class="form-control" name="id_pinjam" value="<?php echo $tampil['id_pinjam'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Id Inventaris</label>
                                            <input class="form-control" name="id_inventaris" value="<?php echo $tampil['id_inventaris'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input class="form-control" name="nama_barang" value="<?php echo $tampil['nama_barang'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['jumlah'];?>" />
    
                                        </div>

                                        <div class="form-group">
                                            <label>Keperluan</label>
                                            <input class="form-control" name="keperluan"  value="<?php echo $tampil['keperluan'];?>" />
                                         
                                         </div>

                                         <div class="form-group">
                                            <label>Lokasi</label>
                                            <input class="form-control" name="lokasi"  value="<?php echo $tampil['lokasi'];?>" />
                                         
                                         </div>

                                        <div class="form-group">
                                            <label>Id Pegawai</label>
                                            <input class="form-control" name="id_pegawai"  value="<?php echo $tampil['id_pegawai'];?>" />
                                         
                                         </div>

                                        <div class="form-group">
                                            <label>Nama Pegawai</label>
                                            <input class="form-control" name="nama_pegawai" value="<?php echo $tampil['nama_pegawai'];?>" />
                                         
                                         </div>

                                        <div class="form-group">
                                            <label>Id Petugas</label>
                                            <input class="form-control" name="id_petugas" value="<?php echo $tampil['id_petugas'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Petugas</label>
                                            <input class="form-control" name="nama_petugas" value="<?php echo $tampil['nama_petugas'];?>" />
                                            
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
 
        $id_pinjam = $_POST ['id_pinjam'];
        $id_inventaris = $_POST ['id_inventaris'];
        $nama_barang = $_POST ['nama_barang'];
        $jumlah = $_POST ['jumlah'];
        $keperluan = $_POST ['keperluan'];
        $lokasi = $_POST ['lokasi'];
        $id_pegawai = $_POST ['id_pegawai'];
        $nama_pegawai = $_POST ['nama_pegawai'];
        $id_petugas = $_POST ['id_petugas'];
        $nama_petugas = $_POST ['nama_petugas'];

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("update tb_peminjaman set id_pinjam='$id_pinjam',id_inventaris='$id_inventaris',nama_barang='$nama_barang',jumlah='$jumlah',keperluan='$keperluan',lokasi='$lokasi',id_pegawai='$id_pegawai',nama_pegawai='$nama_pegawai',id_petugas='$id_petugas',nama_petugas='$nama_petugas' where no='$no'");

            if ($sql) {
                ?>
                    <script type="text/javascript">

                        alert ("Data Berhasil Disimpan");
                        window.location.href="?page=peminjaman"; 
                    </script>
                <?php
            }
        }

 ?>           
