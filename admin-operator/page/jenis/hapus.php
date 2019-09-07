<?php

$no = $_GET['no'];

$koneksi->query("delete from tb_jenis where no='$no'")

?>

        <script type="text/javascript">
                        window.location.href="?page=jenis"; 
         </script>