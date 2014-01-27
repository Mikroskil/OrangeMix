<?php require_once 'nav.php'; require_once 'functions.php'; connect();?>
<form class="cbp-mc-form" action="tambah_kategori.php" name="tambah_kategori" id="tambah_kategori" method="post">
    <div class="head">
        <h1 align="center">Tambah/Edit Kategori</h1> 
        <h3 align="center" id="info"></h3>
    </div>
    <div class="cbp-mc-column">
        <label for="id_barang">Id_Kategori</label>
        <input type="text" id="id_barang" name="id_barang" placeholder="ID" >
        <label for="gagdet">Nama Kategori</label>
        <input type="text" id="nama_barang" name="nama_barang" placeholder="Nama Kategori" >
        
    </div>
    <div class="cbp-mc-column" style="width:200px;">

        <h3 id="info"></h3>
    </div>
    <div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" name="submit" id="submit" value="Simpan" /><button class="cbp-mc-submit" value="kembali" style="height:58px; margin-left:10px;"/><a href="kategori.php">Kembali</a></button></div>
</form>s
</div><!-- /container -->
        <script src="js/classie.js"></script>
        <script src="js/gnmenu.js"></script>
        <script>
            new gnMenu( document.getElementById( 'gn-menu' ) );
        </script>
    </body>
</html>