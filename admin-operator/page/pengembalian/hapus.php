<?php

$no = $_GET['no'];

$koneksi->query("delete from tb_pengembalian where no='$no'")

?>

        <script type="text/javascript">
                        window.location.href="?page=pengembalian"; 
         </script>