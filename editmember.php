<?php require_once 'nav.php';require_once 'functions.php'; connect();?>	
			<form class="cbp-mc-form"  action="editmember1.php" name="editmember" id="editmember" method="post">
				<div class="head">
					<h1 align="center" >Edit Member </h1>	
					<h3 align="center" id="info"></h3>
				</div>
				<?php $p=getMember($_GET['id']);?>
				<input type="hidden" name="id" value="<?php echo  $p['id']?>">
					<div class="cbp-mc-column"style="margin-left:60px">
						<label for="nama_depan">Nama Depan</label>
	  					<input type="text" readonly id="nama_depan" name="nama_depan" placeholder="Nama Depan" value="<?php echo  $p['nama_depan'];?>">
	  					<label for="jk">Jenis Kelamin</label>
	  					<input type="text" id="jenis_kelamin" name="jenis_kelamin" readonly value="<?php if ($p['jenis_kelamin']=='l'){echo 'laki-laki';}
	  							else{echo 'perempuan';	
	  						}?>">
	  					<label for="saldo">Saldo</label>
	  					<select id="saldo" name="saldo">
	  						<option value="100000">100.000</option>
	  						<option value="200000">200.000</option>
	  						<option value="300000">300.000</option>
	  						<option value="400000">400.000</option>
	  					</select>
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label for="nama_belakang">Nama Belakang</label>
	  					<input type="text" id="nama_belakang" name="nama_belakang" placeholder="Nama belakang" value="<?php echo  $p['nama_belakang'];?>">
	  					<label for="tanggal">Tanggal Lahir</label>
	  					<input type="text" id="tanggal" name="jtanggal" readonly value="<?php echo $p['tanggal_lahir']?>">
	  					<label for="Alamat">Alamat</label>
	  					<textarea id="alamat" name="alamat" ><?php echo $p['alamat']?></textarea>
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" name="submit" id="submit" value="Simpan" /><button class="cbp-mc-submit" value="kembali" style="height:58px; margin-left:10px;" /><a href="daftar_member.php">KEMBALI</a></button></div>
	  			</from>
    		
    	<span id="info"></span>n
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
