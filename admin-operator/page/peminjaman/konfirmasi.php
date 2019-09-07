<div class="box-header">
              <h3 class="box-title">Data Konfirmasi Peminjaman</h3>
            </div>
            <div>
            <!-- DataTables -->
            <script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
            <!-- /.box-header -->
            <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Pinjam</th>
                  <th>ID Inventaris</th>
                  <th>ID Petugas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from tb_peminjaman");

                        while  ($data= $sql->fetch_assoc()) {


                ?>

                    <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['id_pinjam'];?></td>
                            <td><?php echo $data['id_inventaris'];?></td>
                            <td><?php echo $data['id_petugas'];?></td>
                            <td>
                            <a href ="?page=peminjaman&aksi=conn&no=<?php echo $data['no'];?>" class="btn btn-success" > <i class="glyphicon glyphicon-copy"></i>   Konfirmasi</a>
                            <a onclick="return confirm('hapus Data Ini ??')" href ="?page=peminjaman&aksi=hapus&no=<?php echo $data['no'];?>" class="btn btn-danger" >hapus</a>
                            </td>
                    </tr>

                            <?php  } ?>
                
                </tbody>

              </table>
              
            </div>