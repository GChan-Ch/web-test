<?php

session_start();

    $koneksi = new mysqli ("localhost","root","","db_inventaris");

    $no = $_GET['no'];

    $sql = $koneksi->query("select * from tb_sarpras where no='$no'");

    $tampil = $sql->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cetak Kartu Barang</title>
</head>

<body>
<style>
.floating-box {
    float: left;
    width: 150px;
    height: 75px;
    margin: 10px;
    border: 3px solid #73AD21;  
}

.after-box {
    clear: left;
    border: 3px solid red;      
}
</style>
</br>
<table border="1">
    <tr>
       <td height="30" colspan="4" align="center">Kartu Peminjaman Barang</td>   
    </tr>
    <tr>
       <td width="180">No Kartu</td>
       <td width="180">Nama Barang</td>
       <td width="180">Tanggal</td>
       <td width="180">Id Pegawai</td>
    </tr>
    <tr>
       <td height="80"><?php echo $tampil['kondisi_barang'];?></td>
       <td height="80"><?php echo $nama_barang; ?></td>
       <td height="80"><?php echo $tanggal; ?></td>
       <td height="80"><?php echo $id_pegawai; ?></td>
    </tr>
    <tr>
       <td>Kondisi Barang</td>
       <td>Tanggal Kembali</td>
       <td>Keperluan</td>
       <td>Instansi</td>
    </tr>
    <tr>
       <td height="80"></td>
       <td height="80"></td>
       <td height="80"><?php echo $keperluan; ?></td>
       <td height="80"></td>
    </tr>
    <tr>
       <td>Id Inventaris</td>
       <td>Paraf Peminjam</td>
       <td>Paraf Petugas</td>
    </tr>
    <tr>
       <td height="80"><?php echo $id_inventaris; ?></td>
       <td height="80"></td>
       <td height="80"></td>
    </tr>
</table>
<script>
window.load = print_d();
function print_d()
{
window.print();
}
</script>
</body>

</html>