<?php

$no = $_GET['no'];

$koneksi->query("delete from tb_inventaris where no='$no'")

?>

        <script type="text/javascript">
                        window.location.href="?page=inventaris"; 
         </script>