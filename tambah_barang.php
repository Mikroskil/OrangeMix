<?php  require_once 'nav.php';require_once 'functions.php'; connect();?>
			<form class="cbp-mc-form"  action="tambah_barang1.php" name="tambah_barang" id="tambah_barang" method="post">
				<div class="head">
					<h1 align="center" >Tambah/Edit Barang</h1>	
					<h3 align="center" id="info"></h3>
				</div>
					<div class="cbp-mc-column"style="margin-left:60px">
						<label for="id_barang">ID BARANG</label>
	  					<input type="text" id="id_barang" name="id_barang" placeholder="ID BARANG">
	  					<label for="Kategori">Kategori</label>
		  					<select id="kategori" name="kategori">
		  							<?php $kategori = getKategories(); ?>
										<?php foreach ($kategori as $p ):?>
		  									<option value="<?php echo $p['kategori']?>"><?php echo $p['kategori']?></option>
		  								<?php endforeach ?>
		  					</select>
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label for="nama">Nama </label>
	  					<input type="text" id="nama" name="nama" placeholder="Nama">
	  					<label for="stok">Stok</label>
	  					<input type="text" id="stok" name="stok" placeholder="---">
	  					<label for="harga">Harga</label>
	  					<input type="text" id="harga" name="harga" placeholder="---">
	  					
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