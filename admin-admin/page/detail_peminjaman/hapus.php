<?php

$no = $_GET['no'];

$koneksi->query("delete from detail_peminjaman where no='$no'")

?>

        <script type="text/javascript">
                        window.location.href="?page=detail_peminjaman"; 
         </script>