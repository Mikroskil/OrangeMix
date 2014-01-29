<?php  require_once 'nav.php';require_once 'functions.php'; connect();?>
			<form class="cbp-mc-form"  action="editbarang1.php" name="editbarang" id="editbarang" method="post">
				<div class="head">
					<h1 align="center" >Tambah/Edit Barang</h1>	
					<h3 align="center" id="info"></h3>
				</div>
				<?php $p=getBarang($_GET['id']);?>
				<input type="hidden" name="id" value="<?php echo  $p['id']?>">
					<div class="cbp-mc-column"style="margin-left:60px">
						<label for="id_barang">ID BARANG</label>
	  					<input type="text" id="id_barang" name="id_barang" placeholder="ID BARANG" value="<?php echo  $p['id_barang']?>">
	  					<label for="Kategori">Kategori</label>
		  					<input type="text" id="kategori" name="kategori" placeholder="ID BARANG" readonly value="<?php echo  $p['kategori']?>">
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label for="nama">Nama </label>
	  					<input type="text" id="nama" name="nama" placeholder="Nama" value="<?php echo  $p['nama']?> " readonly>
	  					<label for="stok">Stok</label>
	  					<input type="text" id="stok"   value="<?php echo  $p['stok']?> "name="stok" placeholder="---">
	  					<label for="harga">Harga</label>
	  					<input type="text" id="harga"  value="<?php echo  $p['harga']?> "name="harga" placeholder="---">
	  					
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" name="submit" id="submit" value="Simpan" /><button class="cbp-mc-submit" value="kembali" style="height:58px; margin-left:10px;"/><a href="mas_barang.php">KEMBALI</a></button></div>
	  			</from>
    		
    	
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
