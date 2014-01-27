<?php require_once 'functions.php';connect() ?>
<?php
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )):
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$tanggal = $_POST['tanggal'];
	$jk=$_POST['jk'];
	$saldo=$_POST['saldo'];
	$alamat=$_POST['alamat'];
	$query = mysql_query("INSERT INTO member VALUES ('','$nama_depan','$nama_belakang','$jk','$tanggal','$alamat','$saldo','')");
endif?>
