<?php
require_once'config.php';
/**
 * Connect to mysql server
 * @param bool
 * @use true to connect false to close
 */
	function connect($close=true)
	{
		if (!$close) {
		mysql_close($connection);
		return true;
		}
		$connection=mysql_connect(HOST,USER,PASS);
		if(mysql_select_db(DB)){
			return $connection;
		}else{
			echo mysql_error();
		}
	}
	function getKategorie($id){
			$sql="SELECT * FROM kategori WHERE id_kategori = '$id'";
			$query=mysql_query($sql);
			if ($query) {
				return mysql_fetch_assoc($query);
			}else
			{
				return false;
			}
		}
		function getMember($id){
			$sql="SELECT * FROM member WHERE id= '$id'";
			$query=mysql_query($sql);
			if ($query) {
				return mysql_fetch_assoc($query);
			}else
			{
				return false;
			}
		}
	
	function getKategories()
	{
		$sql="SELECT * FROM kategori";
		$query=mysql_query($sql);
		$res=array();
		
		while ($row=mysql_fetch_assoc($query)) {
			$res[]=$row;
		}
		return $res;
	}
	function getBarangs()
	{
		$sql="SELECT * FROM barang";
		$query=mysql_query($sql);
		$res=array();
		
		while ($row=mysql_fetch_assoc($query)) {
			$res[]=$row;
		}
		return $res;
	}
	
	function getBarang($id){
			$sql="SELECT * FROM barang WHERE id= '$id'";
			$query=mysql_query($sql);
			if ($query) {
				return mysql_fetch_assoc($query);
			}else
			{
				return false;
			}
		}
	
	function getMembers()
	{
		$sql="SELECT * FROM member";
		$query=mysql_query($sql);
		$res=array();
		
		while ($row=mysql_fetch_assoc($query)) {
			$res[]=$row;
		}
		return $res;
	}
	

	function delKategori($id_kategori){
			$sql="DELETE FROM kategori WHERE id_kategori = '$id_kategori'";
			$query=mysql_query($sql);
			if ($query) {
				header('location:kategori.php?message=delete');
			}
	}
	function delBarang($id){
			$sql="DELETE FROM barang WHERE id = '$id'";
			$query=mysql_query($sql);
			if ($query) {
				header('location:mas_barang.php?message=delete');
			}
	}
	function delMember($id){
			$sql="DELETE FROM member WHERE id = '$id'";
			$query=mysql_query($sql);
			if ($query) {
				header('location:daftar_member.php?message=delete');
			}
	}

	?>
