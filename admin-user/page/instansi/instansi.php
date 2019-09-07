<a href="?page=instansi&aksi=tambah" class="btn btn-info" style="margin-bottom: 5px;"><i class="icon icon-plus"></i>Tambah Data</a>

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Instansi</h3>
            </div>
            <div>
            <!-- /.box-header -->
            <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Instansi</th>
                  <th>Nama Instansi</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from tb_instansi");

                        while  ($data= $sql->fetch_assoc()) {

                ?>

                    <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['no_instansi'];?></td>
                            <td><?php echo $data['nama_instansi'];?></td>
                            <td><?php echo $data['alamat'];?></td>
                            <td>
                                <a href="?page=instansi&aksi=ubah&no=<?php echo $data['no'];?>" class="btn btn-success" ><i class="icon icon-pencil"></i>Ubah</a>
                                <a onclick="return confirm('hapus Data Ini ??')" href ="?page=instansi&aksi=hapus&no=<?php echo $data['no'];?>" class="btn btn-danger" ><i class="icon icon-trash"></i>Hapus</a>

                            </td>
                    </tr>

                            <?php  } ?>
                
                </tbody>

              </table>
            </div>
        </div>
    </div>
