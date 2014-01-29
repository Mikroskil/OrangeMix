<?php require_once 'functions.php';connect() ?>
<?php
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )):
	$id=$_POST['id'];
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$query = mysql_query("update kategori set id_kategori='$id_barang',kategori='$nama_barang' where id='$id'");
endif?>
