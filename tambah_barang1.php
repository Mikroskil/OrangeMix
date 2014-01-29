<?php require_once 'functions.php';connect() ?>
<?php
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )):
	$id_barang= $_POST['id_barang'];
	$nama = $_POST['nama'];
	$kategori = $_POST['kategori'];
	$stok=$_POST['stok'];
	$harga=$_POST['harga'];
	$query = mysql_query("INSERT INTO barang VALUES ('','$id_barang','$nama','$kategori','$stok','$harga')");
endif?>
