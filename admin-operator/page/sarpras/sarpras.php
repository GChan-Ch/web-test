<a href="?page=sarpras&aksi=tambah" class="btn btn-info" style="margin-bottom: 5px;">Tambah Data</a>

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Sarana Prasana</h3>
            </div>
            <div>
            <!-- /.box-header -->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Sarpras</th>
                  <th>Nama Barang</th>
                  <th>Kondisi</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Spesifikasi</th>
                  <th>Kategori</th>
                  <th>ID Petugas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from tb_sarpras");

                        while  ($data= $sql->fetch_assoc()) {

                ?>

                    <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['kode_sarpras'];?></td>
                            <td><?php echo $data['nama_barang'];?></td>
                            <td><?php echo $data['kondisi_barang'];?></td>
                            <td><?php echo $data['harga'];?></td>
                            <td><?php echo $data['jumlah'];?></td>
                            <td><?php echo $data['spesifikasi'];?></td>
                            <td><?php echo $data['kategori'];?></td>
                            <td><?php echo $data['id_petugas'];?></td>
                            <td>
                            <a href="?page=sarpras&aksi=ubah&no=<?php echo $data['no'];?>" class="btn btn-info" >Ubah</a>
                                <a onclick="return confirm('hapus Data Ini ??')" href ="?page=sarpras&aksi=hapus&no=<?php echo $data['no'];?>" class="btn btn-danger" >hapus</a>
                                <a href ="?page=inventaris&aksi=tambah&no=<?php echo $data['no'];?>" class="btn btn-danger" >simpan</a>
                            </td>
                    </tr>

                            <?php  } ?>
                
                </tbody>

              </table>
            </div>
          </div>


