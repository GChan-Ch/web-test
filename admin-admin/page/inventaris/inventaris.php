            <div class="box-header">
              <h3 class="box-title">Data Inventaris</h3>
            </div>
            <div>
            <!-- /.box-header -->
            <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Inventaris</th>
                  <th>Nama </th>
                  <th>Kondisi</th>
                  <th>Asal </th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Spesifikasi</th>
                  <th>Kategori</th>
                  <th>Ket</th>
                  <th>Id jenis</th>
                  <th>Tanggal</th>
                  <th>Id ruang</th>
                  <th>Id petugas</th>
                  <th>Kode Sarpras</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from tb_inventaris");

                        while  ($data= $sql->fetch_assoc()) {


                ?>

                    <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['id_inventaris'];?></td>
                            <td><?php echo $data['nama_barang'];?></td>
                            <td><?php echo $data['kondisi_barang'];?></td>
                            <td><?php echo $data['asal_barang'];?></td>
                            <td><?php echo $data['harga'];?></td>
                            <td><?php echo $data['jumlah'];?></td>
                            <td><?php echo $data['spesifikasi'];?></td>
                            <td><?php echo $data['kategori'];?></td>
                            <td><?php echo $data['keterangan'];?></td>
                            <td><?php echo $data['id_jenis'];?></td>
                            <td><?php echo $data['tanggal_register'];?></td>
                            <td><?php echo $data['id_ruang'];?></td>
                            <td><?php echo $data['id_petugas'];?></td>
                            <td><?php echo $data['kode_sarpras'];?></td>
                            <td>
                                <a onclick="return confirm('hapus Data Ini ??')" href ="?page=inventaris&aksi=hapus&no=<?php echo $data['no'];?>" class="btn btn-danger" ></i> Hapus</a>
                                <a href ="page/inventaris/print.php" class="btn btn-info" > </i> Print</a>
                                <a href="?page=inventaris&aksi=ubah&no=<?php echo $data['no'];?>" class="btn btn-info" >Ubah</a>
                            </td>
                    </tr>

                            <?php  } ?>
                
                </tbody>

              </table>
            </div>

            <a href="page/inventaris/print.php" target="blank" class="btn btn-default" style="margin-top: 8px"><i class="fa fa-print"></i> Exportpdf</a>
                          

            </div>
          </div>
     