<?php
    $pinjam = date("Y-m-d");

    $no = $_GET['no'];

    $sql = $koneksi->query("select * from tb_inventaris where no='$no'");

    $tampil = $sql->fetch_assoc();


?>

<div class="panel panel-default">
<div class="panel-heading">
        Pinjam Barang
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">
                                    
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Id Pinjam</label>
                                            <input class="form-control" name="id_pinjam" />
                                            

                                        <div class="form-group">
                                            <label>Id Inventaris</label>
                                            <input class="form-control" name="id_inventaris" value="<?php echo $tampil['id_inventaris'];?> " readonly/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input class="form-control" name="nama_barang" value="<?php echo $tampil['nama_barang'];?> " readonly/>
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Keperluan</label>
                                            <input class="form-control" name="keperluan" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input class="form-control" name="lokasi" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Id Peminjam</label>
                                            <input class="form-control" name="id_peminjam" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Peminjam</label>
                                            <input class="form-control" name="nama_peminjam" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>tanggal pinjam</label>
                                            <input class="form-control" type="text"name="tglpinjam" value="<?php echo $pinjam;?> " readonly />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control" name="tglkembali" type="date" />
                                            
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
        $jumlah = $_POST ['jumlah'];
        $keperluan = $_POST ['keperluan'];
        $lokasi = $_POST ['lokasi'];
        $id_peminjam = $_POST ['id_peminjam'];
        $nama_peminjam = $_POST ['nama_peminjam'];
        $tglpinjam = $_POST ['tglpinjam'];
        $tglkembali = $_POST ['tglkembali'];
        

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("insert into tb_peminjaman (id_pinjam,id_inventaris,nama_barang,jumlah,keperluan,lokasi,id_peminjam,nama_peminjam,tglpinjam,tglkembali)values('$id_pinjam', '$id_inventaris', '$nama_barang', '$jumlah', '$keperluan', '$lokasi', '$id_peminjam', '$nama_peminjam','$tglpinjam','$tglkembali')");

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
