<?php require_once 'nav.php';require_once 'functions.php'; connect();?>
	
			<table class="flat-table flat-table-1" width="800px">
				<thead>
					<th colspan="2">
						<?php 
							if(!empty($_GET['message']) && $_GET['message']=='delete'){
								echo "<h3>Berhasil Dihapus</h3>";
								header('location:kategori.php');		
							}
							else{
								echo "<h3></h3>";	
							}
						?>
					</th>
					<th align="right">
						<a href="tambah_kategori.php"> Tambah Data</a>
					</th>
				</thead>
				<thead>
					<th align="center" colspan="3">Data Kategori</th>
					
				</thead>
				<thead>
					<th  width="300px" align="left">ID</th>
					<th  width="300px" align="left">Kategori</th>
					<th>Aksi</th>
				</thead>
				
				
				<?php $kategori = getKategories(); ?>
					<?php foreach ($kategori as $p ):?>
					<tr>
						<td width="300px" align="left"><span><?php echo  $p['id_kategori']?><span></td  width="300px" align="left"><td><?php echo  $p['kategori']?></td><td align="center">
						<a href="editkategori.php?id=<?php echo $p['id_kategori'];?>"> <img src="icon/Pencil-icon.png" style="margin-right:10px"></a><a href="delete.php?id_kategori=<?php echo  $p['id_kategori']; ?>"><img src="icon/Delete-icon.png"></a></td>
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