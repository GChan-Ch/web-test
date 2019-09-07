<div class="box-header" style ="background color: #ffffff">
              <h3 class="box-title">Data Pengembalian</h3>
            </div>
            <div>
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
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Keperluan</th>
                  <th>Lokasi</th>
                  <th>ID Peminjam</th>
                  <th>Nama Peminjam</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                 
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
                            <td><?php echo $data['id_pinjam'];?></td>
                            <td><?php echo $data['id_inventaris'];?></td>
                            <td><?php echo $data['id_petugas'];?></td>
                            <td><?php echo $data['nama_barang'];?></td>
                            <td><?php echo $data['jumlah'];?></td>
                            <td><?php echo $data['keperluan'];?></td>
                            <td><?php echo $data['lokasi'];?></td>
                            <td><?php echo $data['id_peminjam'];?></td>
                            <td><?php echo $data['nama_peminjam'];?></td>
                            <td><?php echo $data['tglpinjam'];?></td>
                            <td><?php echo $data['tglkembali'];?></td>

                    </tr>

                            <?php  } ?>
                
                    </tbody>

                </table>
              
                </div>
                <a href="#" target="blank" class="btn btn-default" style="margin-top: 8px"><i class="fa fa-trash"></i> Hapus</a>
             </div>
           