<a href="?page=petugas&aksi=tambah" class="btn btn-info" style="margin-bottom: 5px;"> <i class="icon icon-plus"></i>Tambah Data</a>

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Petugas</h3>
            </div>
            <div>
            <!-- /.box-header -->
            <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Petugas</th>
                  <th>Nama Petugas</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>id_level</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from tb_petugas");

                        while  ($data= $sql->fetch_assoc()) {

                ?>

                    <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['id_petugas'];?></td>
                            <td><?php echo $data['nama_petugas'];?></td>
                            <td><?php echo $data['username'];?></td>
                            <td><?php echo $data['password'];?></td>
                            <td><?php echo $data['id_level'];?></td>
                            <td>
                                <a href="?page=petugas&aksi=ubah&no=<?php echo $data['no'];?>" class="btn btn-info" > <i class="icon icon-pencil"></i>Ubah</a>
                                <a onclick="return confirm('hapus Data Ini ??')" href ="?page=petugas&aksi=hapus&no=<?php echo $data['no'];?>" class="btn btn-danger" > <i class="icon icon-trash"></i>Hapus</a>

                            </td>
                    </tr>

                            <?php  } ?>
                
                </tbody>

              </table>
            </div>
        </div>
    </div>
