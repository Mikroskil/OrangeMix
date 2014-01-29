<?php session_start(); ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
<meta name="robots" content="noindex,follow" />

</head>
<body>
  <div class="container">
       <?php
// menampilkan validasi jika username atau password salah
if(isset($_SESSION['pesan'])){
    echo "<script language=\"Javascript\">\n"."window.alert('".$_SESSION['pesan']."')"."</script>";
    unset($_SESSION['pesan']);
}
// apa bila login berhasil tampilkan Pesan 
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
        //echo "Selamat Anda berhasil login sebagai : ".$_SESSION['level']." ";
        //echo '<a href=\'logout.php\'>LogOut</a><br />';
        header("location: memberreg.php");
     
}else{
// apabila login gagal lanjut tampilkan form login
?>
    <div class="login">
      <h1>Admin</h1>
   

      <form method="post" action="loginpage.php">
        <p><input type="text" name="username" value="" placeholder="Admin"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
      
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
      
    </div>

   
     <?php } ?>
  </div>
</body>
</html>
