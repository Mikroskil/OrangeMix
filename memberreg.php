<?php require_once 'nav.php';?>	
			
			<form class="cbp-mc-form"  action="register.php" name="register" id="register" method="post">
				<div class="head">
					<h1 align="center" >Registrasi Member Smart Card </h1>	
					<h3 align="center" id="info"></h3>
				</div>
					<div class="cbp-mc-column"style="margin-left:85px">
						<label for="nama_depan">Nama Depan</label>
	  					<input type="text" id="nama_depan" name="nama_depan" placeholder="Nama Depan">
	  					<label for="jk">Jenis Kelamin</label>
	  					<select id="jk" name="jk">
	  						<option value="l">laki-laki</option>
	  						<option value="p">perempuan</option>
	  					</select>
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
	  					<input type="text" id="nama_belakang" name="nama_belakang" placeholder="Nama belakang">
	  					<label for="tanggal">Tanggal Lahir</label>
	  					<input type="text" id="tanggal" name="tanggal" placeholder="--/--/--">
	  					<label for="Alamat">Alamat</label>
	  					<textarea id="alamat" name="alamat"></textarea>
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" name="submit" id="submit" value="Simpan" /><button class="cbp-mc-submit" value="kembali" style="height:58px; margin-left:10px;"/><a href="daftar_member.php">KEMBALI</a></button></div>
	  			</from>
    		
    	
		<!-- /container -->
		
		</div>
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>