<?php

$no = $_GET['no'];

$koneksi->query("delete from tb_peminjaman where no='$no'")

?>

        <script type="text/javascript">
                        window.location.href="?page=peminjaman"; 
         </script>