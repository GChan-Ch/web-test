<?php

$no = $_GET['no'];

$koneksi->query("delete from tb_pegawai where no='$no'")

?>

        <script type="text/javascript">
                        window.location.href="?page=pegawai"; 
         </script>