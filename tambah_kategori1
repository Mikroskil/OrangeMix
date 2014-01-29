<?php require_once 'functions.php';connect() ?>
<?php
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )):
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$query = mysql_query("INSERT INTO kategori VALUES ('','$id_barang','$nama_barang')");
endif?>
