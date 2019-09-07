<?php

session_start();

    $koneksi = new mysqli ("localhost","root","","db_inventaris");

?>
<center><b><font size="5" face="Courier New">SMK TERPADU AL ITTIHAD PURABAYA</font></b></center>
<center><b>Jalan Raya Purabaya Km. 37 Sukabumi Kode Pos 43187<b></center>
<center><b>E-mail : smkterpadualittihadpurabaya@gmail.com Telepon : 085887567891<b></center>
<hr><width="100" height="100"></hr>
<hr><width="100" height="100"></hr><br>
<center><div class="table-responsive">
<table border="1" >
<thead>
<tr>
<th>No</th>
<th>ID Inventaris</th>
<th>Nama </th>
<th>Kondisi</th>
<th>Asal </th>
<th>Harga</th>
<th>Jumlah</th>
<th>Spesifikasi</th>
<th>Kategori</th>
<th>Ket</th>
<th>ID jenis</th>
<th>Tanggal</th>
<th>ID ruang</th>
<th>ID petugas</th>
<th>Kode Sarpras</th>
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
</tr>

    <?php  } ?>
</tbody>
</table>
</div>
</center>
<script>
window.load = print_d();
function print_d()
{
window.print();
}
</script>