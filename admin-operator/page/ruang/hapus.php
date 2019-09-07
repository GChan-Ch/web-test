<?php

$no = $_GET['no'];

$koneksi->query("delete from tb_ruang where no='$no'")

?>

        <script type="text/javascript">
                        window.location.href="?page=ruang"; 
         </script>