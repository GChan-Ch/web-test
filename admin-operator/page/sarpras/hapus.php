<?php

$no = $_GET['no'];

$koneksi->query("delete from tb_sarpras where no='$no'")

?>

        <script type="text/javascript">
                        window.location.href="?page=sarpras"; 
         </script>

