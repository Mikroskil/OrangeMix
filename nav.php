<?php error_reporting(0);?>
<?php session_start();
ob_start();
ob_end_clean(); ?>
<?php require_once 'functions.php'; connect(); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Smart Card Sistem</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        
		<script src="js/modernizr.custom.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script>
            $(function() {
                $( "#tanggal" ).datepicker({
                    dateFormat: ' yy-mm-dd'
                });
            });
        </script>

        <script>
          $(function () {
            $('#editkategori').on('submit', function (e) {
            event.preventDefault();// using this page stop being refreshing 
              $.ajax({
                type: 'POST',
                url: 'editkat1.php',
                data: $('#editkategori').serialize(),
               beforeSend: function(){
                    // change submit button value text and disabled it
                   $('#info').text('Data berhasil disimpan');
                },
                success: function () {
                    $('#info').text('');
                }
              });
            });
          });
        </script>

        <script>
          $(function () {
            $('#register').on('submit', function (e) {
            event.preventDefault();// using this page stop being refreshing 
              $.ajax({
                type: 'POST',
                url: 'register.php',
                data: $('#register').serialize(),
               beforeSend: function(){
                    // change submit button value text and disabled it
                   $('#info').text('Data berhasil disimpan');
                },
                success: function () {
                    $('#info').text('');
                }
              });
            });
          });
        </script>

    <script>
          $(function () {
            $('#editmember').on('submit', function (e) {
            event.preventDefault();// using this page stop being refreshing 
              $.ajax({
                type: 'POST',
                url: 'editmember1.php',
                data: $('#editmember').serialize(),
               beforeSend: function(){
                    // change submit button value text and disabled it
                   $('#info').text('Data berhasil disimpan');
                },
                success: function () {
                    $('#info').text('');
                }
              });
            });
          });
        </script>
        <script>
          $(function () {
            $('#editbarang').on('submit', function (e) {
            event.preventDefault();// using this page stop being refreshing 
              $.ajax({
                type: 'POST',
                url: 'editbarang1.php',
                data: $('#editbarang').serialize(),
               beforeSend: function(){
                    // change submit button value text and disabled it
                   $('#info').text('Data berhasil disimpan');
                },
                success: function () {
                    $('#info').text('');
                }
              });
            });
          });
        </script>
        <script>
          $(function () {
            $('#tambah_barang').on('submit', function (e) {
            event.preventDefault();// using this page stop being refreshing 
              $.ajax({
                type: 'POST',
                url: 'tambah_barang1.php',
                data: $('#tambah_barang').serialize(),
               beforeSend: function(){
                    // change submit button value text and disabled it
                   $('#info').text('Data berhasil disimpan');
                },
                success: function () {
                    $('#info').text('');
                }
              });
            });
          });
        </script>
         <script>
          $(function () {
            $('#tambah_kategori').on('submit', function (e) {
            event.preventDefault();// using this page stop being refreshing 
              $.ajax({
                type: 'POST',
                url: 'tambah_kategori1.php',
                data: $('#tambah_kategori').serialize(),
               beforeSend: function(){
                    // change submit button value text and disabled it
                   $('#info').text('Data berhasil disimpan');
                },
                success: function () {
                    $('#info').text('');
                }
              });
            });
          });
        </script>
	</head>

	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger" >
                    <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller">
                            <ul class="gn-menu">
                                
                                <li>
                                    <a class="gn-icon ">Member</a>
                                    <ul class="gn-submenu">
                                        <li><a class="gn-icon gn-icon-cog" href="memberreg.php">Register</a></li>
                                        <li><a class="gn-icon gn-icon-cog" href="belanja.php">Belanja</a></li>
                                        <li><a class="gn-icon gn-icon-cog" href="daftar_member.php">Daftar Member</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="gn-icon ">Barang</a>
                                    <ul class="gn-submenu">
                                        <li><a class="gn-icon gn-icon-archive" href="mas_barang.php">Master Barang</a></li>
                                        <li><a class="gn-icon gn-icon-archive" href="kategori.php">Kategori</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="gn-icon ">Laporan</a>
                                    <ul class="gn-submenu">
                                        <li><a class="gn-icon gn-icon-archive" href="lap_penjualan.php">Penjualan</a></li>
1                                    </ul>
                                </li>
                                
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
                <li>
                    <span>
                        <?php if (isset($_SESSION['username'])&&(isset($_SESSION['level'])))
                            {
                                echo $_SESSION['nama'];?>       
                   </span>    
                </li>
                <li style="width:1000px;border-right:none;"> <center><h1>Card Food</h1></center></li>
                <li><a  href='logout.php'  title='logout'><span>log out</span></a> <?php } ?></li>  
            </ul>
