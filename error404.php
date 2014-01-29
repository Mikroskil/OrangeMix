 <?php
        if(!isset($_SESSION['username']))
        {
            echo " <div id='loader'><img src='img/loader.gif'/></div>
            <div class='errorContainer'>
                <h1>404</h1>
                <h2>Ooops! Page not Found</h2>
            </div>  ";
            exit();
        }
?>
