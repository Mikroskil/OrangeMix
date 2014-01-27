<?php error_reporting(0);?>
<?php  require_once 'nav.php';require_once 'functions.php'; connect();?>				<table class="flat-table flat-table-1" width="800px">
				<thead>
					<th colspan="5">
						<?php 
							if(!empty($_GET['message']) && $_GET['message']=='delete'){
								echo "<h3>Berhasil Dihapus</h3>";
								header('location:mas_barang.php');		
							}
							else{
								echo "<h3></h3>";	
							}
						?>
					</th>
					<th align="right">
						<a href="tambah_barang.php"> Tambah Data</a>
					</th>	
				</thead>
				<thead>
					<th align="center" colspan="6">Data Barang</th>
				</thead>
				<thead>
					<th  width="100px" align="left">ID</th>
					<th align="left">Nama</th>
					<th align="left">Kategori</th>
					<th align="left">Stok</th>
					<th align="left">Harga</th>
					<th >Aksi</th>
				</thead>
				
				
				<?php $barang = getBarangs(); ?>
					<?php foreach ($barang as $p ):?>
					<tr>
						<td width="100px" align="left"><span><?php echo  $p['id_barang']?><span></td align="left"><td><?php echo  $p['nama']?></td>
						<td><?php echo  $p['kategori']?></td>
						<td><?php echo  $p['stok']?></td>
						<td><?php echo  $p['harga']?></td>
						<td align="center">
						<a href="editbarang.php?id=<?php  echo $p['id'];?>"> <img src="icon/Pencil-icon.png" style="margin-right:10px"></a><a href="delete1.php?id=<?php echo  $p['id']; ?>"><img src="icon/Delete-icon.png"></a></td>
					</tr>
		 			<?php endforeach ?>
			</table>
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>