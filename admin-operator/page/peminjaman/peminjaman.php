<div class="box-header">
              <h3 class="box-title">Peminjaman</h3>
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
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Kondisi </th>
                  <th>Spesifikasi</th>
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
                            <td><?php echo $data['jumlah'];?></td>
                            <td><?php echo $data['kondisi_barang'];?></td>
                            <td><?php echo $data['spesifikasi'];?></td>
                            <td>
                                <a onclick="return confirm('pinjam barang ini ??')" href ="?page=peminjaman&aksi=tambah&no=<?php echo $data['no'];?>" class="btn btn-danger" ></i> Pinjam</a>
                                <a onclick="return confirm('Apakah anda ingin mengkonfirmasinya?')" href ="?page=peminjaman&aksi=hapus&no=<?php echo $data['no'];?>" class="btn btn-danger" >Konfirmasi</a>
                            </td>
                    </tr>

                            <?php  } ?>
                
                </tbody>

              </table>
            </div>

            </div>
          </div>
        </div>