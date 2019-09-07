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


                                    <form method="POST" class="form-horizontal" >
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label">ID PETUGAS</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="id_petugas" value="<?php echo $tampil['id_petugas'];?>" placeholder="Masukan ID Petugas">
                                            </div>
                                        </div>

                                        <div>
                                               <input type="submit" name="simpan" value="Masuk" class="btn btn-primary">   
                                        </div>
                                 </div>
                                        
                                 </form>
                              </div>
 </div>
 </div>
 </div>


 <?php
 
        $id_petugas = $_POST ['id_petugas'];

        $simpan = $_POST ['simpan'];

        if ($simpan) {

            $sql = $koneksi->query("update tb_peminjaman set id_petugas='$id_petugas' where no='$no'");

            if ($sql) {
                ?>
                    <script type="text/javascript">

                        window.location.href="?page=detail_peminjaman"; 
                    </script>
                <?php
            }
        }

 ?>           