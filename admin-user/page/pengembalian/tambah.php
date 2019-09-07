<?php

    $pinjam = date("Y-m-d");

    $no = $_GET['no'];

    $sql = $koneksi->query("select * from tb_peminjaman where no='$no'");

    $tampil = $sql->fetch_assoc();

    $kategori = $tampil ['kategori'];

?>




<div class="panel panel-default">
<div class="panel-heading">
        SIMPAN DATA PENGEMBALIAN
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-5">


                                    <form method="POST">
                                    <p>
                                        <div class="form-group">
                                            <label>Id Pinjam</label>
                                            <input class="form-control" name="id_pinjam" value="<?php echo $tampil['id_pinjam'];?>" readonly />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Id Inventaris</label>
                                            <input class="form-control" name="id_inventaris" value="<?php echo $tampil['id_inventaris'];?>" readonly />
                                            
                                        </div>
                                    </p>

                                        <div class="form-group">
                                            <label>Id Petugas</label>
                                            <input class="form-control" name="id_petugas" value="<?php echo $tampil['id_petugas'];?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input class="form-control" name="nama_barang" value="<?php echo $tampil['nama_barang'];?>" readonly />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['jumlah'];?>" readonly />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Keperluan</label>
                                            <input class="form-control" name="keperluan" value="<?php echo $tampil['keperluan'];?>" readonly />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input class="form-control" name="lokasi" value="<?php echo $tampil['lokasi'];?>" readonly />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>ID Peminjam</label>
                                            <input class="form-control" name="id_peminjam" value="<?php echo $tampil['id_peminjam'];?>" readonly />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Peminjam</label>
                                            <input class="form-control" name="nama_peminjam" value="<?php echo $tampil['nama_peminjam'];?>" readonly />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input class="form-control" name="tglpinjam" value="<?php echo $tampil['tglpinjam'];?>" readonly />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control" name="tglkembali" value="<?php echo $pinjam;?>" readonly />
                                            
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
 
        $id_pinjam = $_POST ['id_pinjam'];
        $id_inventaris = $_POST ['id_inventaris'];
        $nama_barang = $_POST ['nama_barang'];
        $id_petugas = $_POST ['id_petugas'];
        $jumlah = $_POST ['jumlah'];
        $keperluan = $_POST ['keperluan'];
        $lokasi = $_POST ['lokasi'];
        $id_peminjam = $_POST ['id_peminjam'];
        $nama_peminjam = $_POST ['nama_peminjam'];
        $tglpinjam = $_POST ['tglpinjam'];
        $tglkembali = $_POST ['tglkembali'];

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("insert into tb_pengembalian (id_pinjam,id_inventaris,nama_barang,id_petugas,jumlah,keperluan,lokasi,id_peminjam,nama_peminjam,tglpinjam,tglkembali)values('$id_pinjam', '$id_inventaris', '$nama_barang', '$id_petugas', '$jumlah', '$keperluan', '$lokasi', '$id_peminjam', '$nama_peminjam', '$tglpinjam', '$tglkembali')");

            if ($sql) {
                ?>
                    <script type="text/javascript">
                        alert ("Barang telah dikembalikan");
                        window.location.href="?page=pengembalian&aksi=tampil"; 
                    </script>
                <?php
            } 
        }

 ?>           