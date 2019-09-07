<?php

$no = $_GET['no'];

$koneksi->query("delete from tb_instansi where no='$no'")

?>

        <script type="text/javascript">
                        window.location.href="?page=instansi"; 
         </script>