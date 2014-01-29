
<?php require_once 'nav.php';require_once 'functions.php'; connect();?>
	
			<table class="flat-table flat-table-1" width="900px">
				<thead>
					<th colspan="6">
						<?php 
							if(!empty($_GET['message']) && $_GET['message']=='delete'){
								echo "<h3>Berhasil Dihapus</h3>";
								header('location:daftar_member.php');		
							}
							else{
								echo "<h3></h3>";	
							}
						?>
					</th>
					<th align="right">
						<a href="memberreg.php"> Tambah Data</a>
					</th>	
				</thead>
				<thead>
					<th align="center" colspan="7">Daftar Member</th>
				</thead>
				<thead>
					<th align="left">Nama Depan</th>
					<th align="left">Nama Belakang</th>
					<th align="left">Jenis Kelamin</th>
					<th align="left">Tanggal Lahir</th>
					<th align="left">Alamat</th>
					<th align="left">Saldo</th>
					<th>Aksi</th>
				</thead>
				
				<?php $member = getMembers(); ?>
					<?php foreach ($member as $p ):?>
					<tr>
						<td align="left">
							<span><?php echo  $p['nama_depan']?><span>
						</td>
						<td>
							<?php echo $p['nama_belakang']?>
						</td>
						<td>
							<?php if($p['jenis_kelamin']==l){
								echo "laki-laki";
							}else{
								echo "perempuan";
							}
							?>
						</td>
						<td>
							<?php echo $p['tanggal_lahir']?>
						</td>
						<td>
							<?php echo $p['alamat']?>
						</td>
						<td>
							<?php echo $p['saldo']?>
						</td>
						
						<td align="center" width="100px">
						<a href="editmember.php?id=<?php echo $p['id'];?>"> <img src="icon/Pencil-icon.png" style="margin-right:10px"></a><a href="delete2.php?id=<?php echo  $p['id']; ?>"><img src="icon/Delete-icon.png"></a>
						</td>
					</tr>
				
		 			<?php endforeach ?>
			</table>
			
		</div><!-- / container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
