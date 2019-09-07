<?php

$no = $_GET['no'];

$koneksi->query("delete from tb_petugas where no='$no'")

?>

        <script type="text/javascript">
                        window.location.href="?page=petugas"; 
         </script>