<div class="box-header">
              <h3 class="box-title">Pengembalian</h3>
            </div>
            <div>
            <!-- /.box-header -->
            <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Pengembalian</th>
                  <th>ID Inventaris</th>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>ID Peminjam</th>
                  <th>ID Pegawai</th>
                  <th>ID Petugas</th>
                  <th>Aksi</th>
                 
                </tr>
                </thead>
                <tbody>

                <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from tb_pengembalian");

                        while  ($data= $sql->fetch_assoc()) {


                ?>

                    <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['id_pengembalian'];?></td>
                            <td><?php echo $data['id_inventaris'];?></td>
                            <td><?php echo $data['nama_barang'];?></td>
                            <td><?php echo $data['jumlah'];?></td>
                            <td><?php echo $data['id_pegawai'];?></td>
                            <td><?php echo $data['id_petugas'];?></td>
                            <td>
                            <a href ="?page=pengembalian&aksi=tambah&no=<?php echo $data['no'];?>" class="btn btn-default" > <i class="fa fa-check-square-o"></i> </a>
                            <a onclick="return confirm('hapus Data Ini ??')" href ="?page=sarpras&aksi=hapus&no=<?php echo $data['no'];?>" class="btn btn-danger" >hapus</a>
                            </td>

                    </tr>

                            <?php  } ?>
                
                    </tbody>

                </table>
              
                </div>
             </div>
     