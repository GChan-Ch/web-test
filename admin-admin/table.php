<?php

    $koneksi = new mysqli ("localhost","root","","db_inventaris");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>GOLDI WEB</title>

  <!-- Favicons -->
  <link href="img/light.jpg" rel="icon">
  <link href="img/lightning.jpg" rel="img/lightning">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

 
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>INVEN<span>TARIS</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          
          <!-- settings end -->
          <!-- inbox dropdown start-->
          
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          
          <!-- notification dropdown end -->
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../login.php">Logout</a></li>
        </ul>
      </div>
      <li class="dropdown">
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="lock" href="lock_screen.html">lock</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/goldi.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Goldi Firmansyah</h5>
          <li class="mt">
          <li class="sub-menu">
          <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Menu Utama</span>
              </a>
              <ul class="sub">
              <li><a href="general.html">Profile</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="?page=inventaris">
              <i class="fa fa-pie-chart"></i>
              <span>Inventaris</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="?page=sarpras">
              <i class="fa fa-cogs"></i>
              <span>sarpras</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="?page=jenis">
              <i class="fa fa-book"></i>
              <span>Jenis</span>
              </a>
           
          </li>
          <li class="sub-menu">
            <a href="?page=ruang">
              <i class="fa fa-tasks"></i>
              <span>Ruang</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="?page=peminjaman">
              <i class="fa fa-th"></i>
              <span>Peminjaman</span>
              </a>
            
          </li>
          <li class="sub-menu">
          <a href="?page=detail_peminjaman">
              <i class="fa fa-th"></i>
              <span>Detail Peminjaman</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="?page=pengembalian">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Pengembalian</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="?page=pegawai">
              <i class="fa fa-comments-o"></i>
              <span>Pegawai</span>
              </a>

              </li>
          <li class="sub-menu">
            <a href="?page=instansi">
              <i class="fa fa-comments-o"></i>
              <span>Instansi</span>
              </a>
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Advanced Table Example</h3>
        <div class="row mb">
          <!-- page start-->
		                    	<?php
                    $page = isset($_GET['page'])?
                    $_GET['page']: false;
                    $aksi = isset($_GET['aksi'])?
                    $_GET['aksi']: false;
                    
                    if ($page == "inventaris") {
                      if ($aksi == "") {
                          include "page/inventaris/inventaris.php";
                        }elseif ($aksi == "tambah") {
                          include "page/inventaris/tambah.php";
                        }elseif ($aksi == "ubah") {
                          include "page/inventaris/ubah.php";
                        }elseif ($aksi == "hapus") {
                          include "page/inventaris/hapus.php";
                      }
                    }elseif ($page == "sarpras") {
                      if ($aksi == "") {
                          include "page/sarpras/sarpras.php";
                      }elseif ($aksi == "tambah") {
                        include "page/sarpras/tambah.php";
                      }elseif ($aksi == "ubah") {
                        include "page/sarpras/ubah.php";
                      }elseif ($aksi == "hapus") {
                        include "page/sarpras/hapus.php";
                      }
                      }elseif ($page == "jenis") {
                        if ($aksi == "") {
                            include "page/jenis/jenis.php";
                          }elseif ($aksi == "tambah") {
                            include "page/jenis/tambah.php";
                        }elseif ($aksi == "ubah") {
                            include "page/jenis/ubah.php";
                        }elseif ($aksi == "hapus") {
                            include "page/jenis/hapus.php";
                          }
                        }elseif ($page == "ruang") {
                          if ($aksi == "") {
                              include "page/ruang/ruang.php";
                            }elseif ($aksi == "tambah") {
                              include "page/ruang/tambah.php";
                          }elseif ($aksi == "ubah") {
                              include "page/ruang/ubah.php";
                          }elseif ($aksi == "hapus") {
                              include "page/ruang/hapus.php";
                            }
                          }elseif ($page == "peminjaman") {
                              if ($aksi == "") {
                                  include "page/peminjaman/peminjaman.php";
                          }elseif ($aksi == "tambah") {
                                  include "page/peminjaman/tambah.php";
                              }elseif ($aksi == "ubah") {
                                  include "page/peminjaman/ubah.php";
                              }elseif ($aksi == "hapus") {
                                  include "page/peminjaman/hapus.php";
                                }
                              }elseif ($page == "detail_peminjaman") {
                                  if ($aksi == "") {
                                      include "page/detail_peminjaman/detail_peminjaman.php";     
                                    }elseif ($aksi == "tambah") {
                                      include "page/detail_peminjaman/tambah.php";
                                  }elseif ($aksi == "ubah") {
                                      include "page/detail_peminjaman/ubah.php";
                                  }elseif ($aksi == "hapus") {
                                      include "page/detail_peminjaman/hapus.php";
                        }

                    }
                    
                      ?>

          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>GOLDI</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created by Goldi<a href="https://templatemag.com/">Tempeee</a>
        </div>
        <a href="advanced_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Nama Barang:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>
