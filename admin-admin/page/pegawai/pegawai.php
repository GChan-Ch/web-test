<a href="?page=pegawai&aksi=tambah" class="btn btn-info" style="margin-bottom: 5px;"><i class="icon icon-plus"></i>Tambah Data</a>

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pegawai</h3>
            </div>
            <div>
            <!-- /.box-header -->
            <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Pegawai</th>
                  <th>Nama Pegawai</th>
                  <th>Nip</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from tb_pegawai");

                        while  ($data= $sql->fetch_assoc()) {

                ?>

                    <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['id_pegawai'];?></td>
                            <td><?php echo $data['nama_pegawai'];?></td>
                            <td><?php echo $data['nip'];?></td>
                            <td><?php echo $data['alamat'];?></td>
                            <td>
                                <a href="?page=pegawai&aksi=ubah&no=<?php echo $data['no'];?>" class="btn btn-success" ><i class="icon icon-pencil"></i>Ubah</a>
                                <a onclick="return confirm('hapus Data Ini ??')" href ="?page=pegawai&aksi=hapus&no=<?php echo $data['no'];?>" class="btn btn-danger" ><i class="icon icon-trash"></i>Hapus</a>

                            </td>
                    </tr>

                            <?php  } ?>
                
                </tbody>

              </table>
            </div>
        </div>
    </div>
