<?php

    $no = $_GET['no'];

    $sql = $koneksi->query("select * from tb_pengembalian where no='$no'");

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
                                            <label>Id Pengembalian</label>
                                            <input class="form-control" name="id_pengembalian" value="<?php echo $tampil['id_pengembalian'];?>"  />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Id Inventaris</label>
                                            <input class="form-control" name="id_inventaris" value="<?php echo $tampil['id_inventaris'];?>"  />
                                            
                                        </div>
                                   

                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input class="form-control" name="nama_barang" value="<?php echo $tampil['nama_barang'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['jumlah'];?>" />
                                           
                                         <div class="form-group">
                                            <label>Id Petugas</label>
                                            <input class="form-control" name="id_pegawai" value="<?php echo $tampil['id_pegawai'];?>"  />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Id Petugas</label>
                                            <input class="form-control" name="id_petugas" value="<?php echo $tampil['id_petugas'];?>"  />
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

    $sql = $koneksi->query("update tb_pengembalian set id_pengembalian='$id_pengembalian',id_inventaris='$id_inventaris',nama_barang='$nama_barang',jumlah='$jumlah',id_pegawai='$id_pegawai',id_petugas='$id_petugas' where no='$no'");

     if ($sql) {
         ?>
             <script type="text/javascript">
                 alert ("Barang telah dikembalikan");
                 window.location.href="?page=pengembalian"; 
             </script>
         <?php
            }
        }

 ?>           
