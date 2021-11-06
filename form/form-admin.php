<!DOCTYPE HTML>
<?php
session_start();
if (isset ($_SESSION['user'])){;
?>
<html lang="en">
    <head>
        <link href="img/logo-sponsor/icon.png" rel="icon">
        <title>SKYLER | We Promise Comfort</title>
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/skyler.css" rel="stylesheet">
        <script src="../js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="../js/skyler.js" type="text/javascript"></script>
    </head>
    <body>
        <a href="#" class="top"><span class="glyphicon glyphicon-arrow-up"></span></a>
        <header>
            <div class="atas">
                <form action="#" method="post">
                    <input type="text" name="" placeholder="Cari Pakaian">
                    <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </form>
                <ul>
                    
                    <li>Bantuan <span class="glyphicon glyphicon-question-sign"></span></li>
                    <li>Admin Aktif : <?php echo $_SESSION['user'] ?></li>
                    <li><a href="../index.php">Logout</a></li>
                </ul>
            </div>
            <img src="../img/logo-sponsor/logoemas.png">
            <div class="promo">
                <img src="../img/logo-sponsor/essence-bakery-hamburger.jpg">
            </div>
            <ul>
                <li><p>Bayar Ditempat <span class="glyphicon glyphicon-map-marker"></span></p></li>
                <li><p>Gratis Ongkir <br> 
                    <span class="glyphicon glyphicon-plane"></span></p></li>
                <li><p>Cicilan<br> 0% <br><span class="glyphicon glyphicon-usd"></span></p></li>
            </ul>
        </header>
        <div class="bawah"></div>
        <div class="subheader">
            <img src="../img/logo-sponsor/logoputih.png">
            
        </div>
        <div class="download">
            <span class="glyphicon glyphicon-triangle-top"></span>
            <ul>
                <li><img src="../img/logo-sponsor/playstore.png"></li><br><br><br>
                <li><img src="../img/logo-sponsor/googleplay.png"></li><br><br><br>
                <li><img src="../img/logo-sponsor/windows.png"></li>
            </ul>
        </div>
        <div class="registrasi">
            <div class="regis">
            </div>
        </div>
        <div class="login">
            <span class="glyphicon glyphicon-triangle-top" id="triangle-top"></span>
            <form action="#" method="post">
                <ul>
                    <li><font class="font-konsumen">Login Konsumen</font></li><br>
                    <li><font class="font-supplier">Login Supplier</font></li>
                </ul>
            </form>
            <span class="glyphicon glyphicon-triangle-right" id="triangle-right"></span>
        </div>
        <div class="login-konsumen">
            <form action="#" method="post">
                Login Konsumen<br>
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password"><br>
                <button type="submit"><span class="glyphicon glyphicon-send"></span></button></a>
            </form>
        </div>
        <div class="login-supplier">
            <form action="#" method="post">
                Login Supplier<br>
                <input type="text" placeholder="No Admin">
                <input type="password" placeholder="Password"><br>
                <button type="submit"><span class="glyphicon glyphicon-send"></span></button></a>
            </form>
        </div>
    
        <div class="container"></div>
        <footer>
            <div class="footer-atas"></div>
            <div class="footer-bawah"></div>
        </footer>
    </body>
</html>
<?php
}else{
?>
<h2>Sorry</h2>
<p>
Anda Tidak Berhak Mengakses Halaman Ini.
Silahkan <a href="../index.php">Login</a>Terlebih Dahulu.
</p>
<?php
}
?>