<a href="?page=ruang&aksi=tambah" class="btn btn-info" style="margin-bottom: 5px;">Tambah Data</a>

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Ruang</h3>
            </div>
            <div>
            <!-- /.box-header -->
            <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Ruang</th>
                  <th>Nama Ruang</th>
                  <th>Kode Ruang</th>
                  <th>keterangan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from tb_ruang");

                        while  ($data= $sql->fetch_assoc()) {

                ?>

                    <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['id_ruang'];?></td>
                            <td><?php echo $data['nama_ruang'];?></td>
                            <td><?php echo $data['kode_ruang'];?></td>
                            <td><?php echo $data['keterangan'];?></td>
                            <td>
                                <a href="?page=ruang&aksi=ubah&no=<?php echo $data['no'];?>" class="btn btn-info" >Ubah</a>
                                <a onclick="return confirm('hapus Data Ini ??')" href ="?page=ruang&aksi=hapus&no=<?php echo $data['no'];?>" class="btn btn-danger" >hapus</a>

                            </td>
                    </tr>

                            <?php  } ?>
                
                </tbody>

              </table>
            </div>
        </div>
    </div>
