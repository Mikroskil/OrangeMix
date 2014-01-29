<?php require_once 'functions.php';connect() ?>
<?php
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )):
	$id=$_POST['id'];
	$stok= $_POST['stok'];
	$harga = $_POST['harga'];
	$query = mysql_query("update barang set stok='$stok',harga='$harga' where id='$id'");
endif?>
