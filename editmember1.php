 <?php require_once 'functions.php';connect() ?>
<?php
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )):
	$id=$_POST['id'];
	$alamat = $_POST['alamat'];
	$saldo =   $_POST['saldo'];
	
	$query = mysql_query("update member set alamat='$alamat',saldo='$saldo' where id='$id'");
endif?>
