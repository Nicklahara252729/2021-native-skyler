<?php
session_start();
session_destroy();
?>
<?php 
include "proses/koneksi.php";
$batas=5;
$skyquerybaby   = mysql_query("SELECT * FROM produk WHERE Kategori='Baby' ORDER BY ID_Produk DESC limit $batas");
$skyqueryblezer = mysql_query("SELECT * FROM produk WHERE Kategori='Blezer' ORDER BY ID_Produk DESC limit $batas");
$skyquerydress  = mysql_query("SELECT * FROM produk WHERE Kategori='Dress' ORDER BY ID_Produk DESC limit $batas");
$skyqueryjeans  = mysql_query("SELECT * FROM produk WHERE Kategori='Jeans' ORDER BY ID_Produk DESC limit $batas");
$skyquerykemeja = mysql_query("SELECT * FROM produk WHERE Kategori='Kemeja' ORDER BY ID_Produk DESC limit $batas");
$skyquerymuslim = mysql_query("SELECT * FROM produk WHERE Kategori='Muslim' ORDER BY ID_Produk DESC limit $batas");
$skyqueryrok    = mysql_query("SELECT * FROM produk WHERE Kategori='Rok' ORDER BY ID_Produk DESC limit $batas");
$skyquerytshirt = mysql_query("SELECT * FROM produk WHERE Kategori='Tshirt' ORDER BY ID_Produk DESC limit $batas");
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link href="img/logo-sponsor/icon-hitam.png" rel="icon">
        <title>SKYLER | We Promise Comfort</title>
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/skyler.css" rel="stylesheet">
        <script src="js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="js/skyler.js" type="text/javascript"></script>        
    </head>
    <body>
        <a href="#" class="top"><span class="glyphicon glyphicon-arrow-up"></span></a>
        <div class="bungkus-header">
        <header>
            <div class="atas">
                <img src="img/logo-sponsor/playstore.png" class="app1">
                <img src="img/logo-sponsor/windows.png" class="app2">
                <img src="img/logo-sponsor/googleplay.png" >
                <ul>
                    <li class="li-download">Mobile Version<span class="glyphicon glyphicon-phone"></span></li>
                    <li class="li-bantuan">Bantuan <span class="glyphicon glyphicon-question-sign"></span></li>
                    <li class="li-registrasi">Registrasi <span class="glyphicon glyphicon-chevron-down"></span>
                        
                    </li>
                    <li class="li-login">Masuk <span class="glyphicon glyphicon-chevron-down"></span></li>
                </ul>
            </div>
                        <a href="index.php"><img src="img/logo-sponsor/logoputih.png"></a>
            <div class="promo">
               <form action="form/Form_Hasil_Pencarian.php" method="post">
                    <input type="text" name="Pencarian" placeholder="Cari Pakaian, atau merk">
                    <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </form>
            </div>
            <ul>
                <li><p>Bayar Ditempat <span class="glyphicon glyphicon-map-marker"></span></p></li>
                <li><p>Gratis Ongkir <br> 
                    <span class="glyphicon glyphicon-plane"></span></p></li>
                <li><p>Cicilan<br> 0% <br><span class="glyphicon glyphicon-usd"></span></p></li>
            </ul>
        </header> 
        <div class="bawah">
            <div class="sub-bawah">
                <ul>
                    <li><span class="glyphicon glyphicon-menu-hamburger"></span>
                        <div class="in-li-kategori">
                            <ul>
                                <li>T-Shirt <span class="glyphicon glyphicon-triangle-right"></span>
                                    <div class="sub-in-li-kategori" id="id-sub-in-satu">
                                        <div class="column-kategori" id="ck-satu"></div>
                                        <div class="column-kategori" id="ck-dua"></div>
                                        <div class="column-kategori" id="ck-tiga">
                                            <?php
                   // while($skyrowtshirt = mysql_fetch_array($skyquerytshirt)){
                    ?>
                    
                    
                                            <div class="isi-column-kategori">
                                                <div class="show-atas" id="show" onclick="hover()">
                        <img src="img/tshirt/<?//php echo $skyrowtshirt['Gambar_Tshirt'];?>">
                        <div class="ket-atas" id="ket">
                            <p><?//php echo $skyrowtshirt['Nama_Tshirt'] ;?>
                                <br><?php //echo "Rp." .number_format($skyrowtshirt['Harga']) ;?>
                            <br><?php// echo $skyrowtshirt['Supplier'] ;?></p>
                            <a href="form/Form_Detail_Tshirt.php"><button type="button">Detail Barang</button></a>
                            <a href="form/keranjang.php"><button type="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                </button></a>
                        </div>
                    </div>
                                            </div>
                                            <?php// } ?>
                                        </div>
                                    </div>
                                </li>
                                <li>Dress <span class="glyphicon glyphicon-triangle-right"></span>
                                     <div class="sub-in-li-kategori" id="id-sub-in-dua">
                                        <div class="column-kategori" id="ck-satu"></div>
                                        <div class="column-kategori" id="ck-dua"></div>
                                        <div class="column-kategori" id="ck-tiga">
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>Rok <span class="glyphicon glyphicon-triangle-right"></span>
                                     <div class="sub-in-li-kategori" id="id-sub-in-tiga">
                                        <div class="column-kategori" id="ck-satu"></div>
                                        <div class="column-kategori" id="ck-dua"></div>
                                        <div class="column-kategori" id="ck-tiga">
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>Jeans <span class="glyphicon glyphicon-triangle-right"></span>
                                     <div class="sub-in-li-kategori" id="id-sub-in-empat">
                                        <div class="column-kategori" id="ck-satu"></div>
                                        <div class="column-kategori" id="ck-dua"></div>
                                        <div class="column-kategori" id="ck-tiga">
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>Baby <span class="glyphicon glyphicon-triangle-right"></span>
                                     <div class="sub-in-li-kategori" id="id-sub-in-lima">
                                        <div class="column-kategori" id="ck-satu"></div>
                                        <div class="column-kategori" id="ck-dua"></div>
                                        <div class="column-kategori" id="ck-tiga">
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>Muslim<span class="glyphicon glyphicon-triangle-right"></span>
                                     <div class="sub-in-li-kategori" id="id-sub-in-enam">
                                        <div class="column-kategori" id="ck-satu"></div>
                                        <div class="column-kategori" id="ck-dua"></div>
                                        <div class="column-kategori" id="ck-tiga">
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>Kemeja <span class="glyphicon glyphicon-triangle-right"></span>
                                     <div class="sub-in-li-kategori" id="id-sub-in-tujuh">
                                        <div class="column-kategori" id="ck-satu"></div>
                                        <div class="column-kategori" id="ck-dua"></div>
                                        <div class="column-kategori" id="ck-tiga">
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>Blezer <span class="glyphicon glyphicon-triangle-right"></span>
                                     <div class="sub-in-li-kategori" id="id-sub-in-delapan">
                                        <div class="column-kategori" id="ck-satu"></div>
                                        <div class="column-kategori" id="ck-dua"></div>
                                        <div class="column-kategori" id="ck-tiga">
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <a href=""><li><span class="glyphicon glyphicon-shopping-cart"></span></li></a>
                    <li>HIGHLIGHTS</li>
                    <li>TOP BRAND</li>
                    <li>DISCOUNT</li>
                    
                </ul>
            </div>
            </div>
            </div>
        <div class="subheader" id="sb">
            <div class="in-subheader">
                <div class="count-subheader" id="count-satu">
                    <a href="../index.php"><img src="img/logo-sponsor/logo.png"></a>
                </div>
                <div class="count-subheader" id="count-dua">
                    <div class="in-count-tiga" id="in-count-satu">
                        <form action="form/Form_Hasil_Pencarian.php" method="post">
                <select name="">
                    <?php
                    $kategori=array('ALL','T-Shirt','Dress','Rok','Jeans','Baby','Muslim','Kemeja','Blezer');
                    for($i=0;$i<=8;$i++){
                        echo"
                        <option value='$kategori[$i]'>$kategori[$i]</option>
                        ";
                    }
                    ?>
                </select>
                <input type="text" name="Pencarian" placeholder="Cari Pakaian, atau merk">
                <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </form>
                    </div>
                    <div class="in-count-tiga" id="in-count-dua">
                        <div class="shop">
                <a href=""><span class="glyphicon glyphicon-shopping-cart"></span></a>
            </div>
                    </div>
                </div>
                <div class="count-subheader" id="count-tiga">
                    <div class="menu-hamburger" id="mh" onclick="muncul()">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </div>
                </div>
            </div>
            <div id="bawah-subheader">
                <div class="in-bawah-subheader">
                    <ul>
                        <li>HIGHLIGHTS</li>
                        <li>NEW BRAND</li>
                        <li>DISCOUNT</li>
                        <li>REGISTRASI &nbsp;<span class="glyphicon glyphicon-chevron-down"></span>
                            <ul>
                                <li class="regist-pembeli"><span class="glyphicon glyphicon-pencil"></span> &nbsp; Pembeli</li>
                                <li class="regist-penjual"><span class="glyphicon glyphicon-pencil"></span> &nbsp; Penjual</li>
                            </ul>
                        </li>
                        <li>MASUK &nbsp;<span class="glyphicon glyphicon-chevron-down"></span>
                            <ul>
                                <li class="signin-pembeli"><span class="glyphicon glyphicon-log-in"></span> &nbsp; Pembeli</li>
                                <li class="signin-penjual"><span class="glyphicon glyphicon-log-in"></span> &nbsp; Penjual</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="login">
            <span class="glyphicon glyphicon-triangle-top" id="triangle-top"></span>
            <ul>
                <li class="signin-pembeli"> <span class="glyphicon glyphicon-log-in"></span> &nbsp; Pembeli</li>
                <li class="signin-penjual"> <span class="glyphicon glyphicon-log-in"></span> &nbsp; Penjual</li>
            </ul>
        </div>
        <div class="registrasi">
            <span class="glyphicon glyphicon-triangle-top" id="triangle"></span>
            <ul>
                <li class="regist-pembeli"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Pembeli</li>
                <li class="regist-penjual"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Penjual</li>
            </ul>
        </div>   
        <div class="regis-penjual">
            <div class="content-penjual">
                <div class="untuk-formulir" id="penjual">
                    <div class="formulir-penjual">
                <div class="minitron">
                    <div class="dark-minitron">
                        <img src="img/logo-sponsor/logoputih.png">
                        <p>REGISTRASI PENJUAL</p>
                    </div>
                    </div>
                <form action="" method="post">
                        <input type="text" name="" placeholder="Nama Lengkap Pemilik" required>
                        <input type="text" name="" placeholder="Nama Lengkap Toko" required>
                        <select name="" class="jenkel" required>
                            <?php
                            $jenkel=array('T-Shirt','Dress','Rok','Jeans','Baby','Muslim','Kemeja','Blezer');
                            for($i=0;$i<=6;$i++){
                                echo"<option value='$jenkel[$i]'>$jenkel[$i]</option>";
                            }
                            ?>
                    </select>
                    <select name="" class="kota" required>
                            <?php
                            $kota=array('Banda Aceh','Medan','Padang','Palembang','Riau');
                            for($i=0;$i<=4;$i++){
                                echo"<option value='$kota[$i]'>$kota[$i]</option>";
                            }
                            ?>
                    </select><br>
                    <select name="" class="tgl" required>
                        <?php
                        for($i=1;$i<=31;$i++){
                            echo"<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <select name="" class="bulan" required>
                        <?php
                        $bulan=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                        for($i=0;$i<=11;$i++){
                            echo"<option value='$bulan[$i]'>$bulan[$i]</option>";
                        }
                        ?>
                    </select>
                    <select name="" class="tahun" required>
                        <?php
                        for($i=1970;$i<=2000;$i++){
                            echo"<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                        <input type="text" name="" placeholder="Kode Pos" required>
                        <input type="text" name="" placeholder="Email" required>
                        <input type="text" name="" placeholder="Username" required>
                        <input type="password" name="" placeholder="Password" required>
                    <textarea name="" placeholder="Alamat" required></textarea>
                        <a href="index.php"><button type="button" id="back"><span class="glyphicon glyphicon-arrow-left"></span> Back</button></a>
                        <button type="reset" id="reset"><span class="glyphicon glyphicon-repeat"></span> Reset</button>
                        <button type="submit" id="submit"><span class="glyphicon glyphicon-send"></span> Submit</button>
                    </form>
                <p>
                    <ul>
                        <li class="ketentuan-seller">Ketentuan Penjual &nbsp;</li>
                        <li> | </li>
                        <li class="kebijakan-seller">&nbsp;Kebijakan Penjual</li>
                </ul>
                </p>
                    </div>
                </div>    
                <div class="readme-penjual" id="penjual">
                    
                    <div class="ketentuan-penjual"></div>
                    <div class="kebijakan-penjual"></div>
                </div>
            </div>
        </div>
        <div class="regis-pembeli">
            <div class="content-penjual">
                <div class="untuk-formulir" id="penjual">
                    <div class="formulir-pembeli">
                <div class="minitron">
                    <div class="dark-minitron">
                        <img src="img/logo-sponsor/logoputih.png">
                        <p>REGISTRASI PEMBELI</p>
                    </div>
                    </div>
                <form action="" method="post">
                        <input type="text" name="" placeholder="Nama Lengkap" required>
                        <select name="" class="jenkel" required>
                            <?php
                            $jenkel=array('Laki - laki','Perempuan');
                            for($i=0;$i<=1;$i++){
                                echo"<option value='$jenkel[$i]'>$jenkel[$i]</option>";
                            }
                            ?>
                    </select>
                    <select name="" class="kota" required>
                            <?php
                            $kota=array('Banda Aceh','Medan','Padang','Palembang','Riau');
                            for($i=0;$i<=4;$i++){
                                echo"<option value='$kota[$i]'>$kota[$i]</option>";
                            }
                            ?>
                    </select><br>
                    <select name="" class="tgl" required>
                        <?php
                        for($i=1;$i<=31;$i++){
                            echo"<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <select name="" class="bulan" required>
                        <?php
                        $bulan=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                        for($i=0;$i<=11;$i++){
                            echo"<option value='$bulan[$i]'>$bulan[$i]</option>";
                        }
                        ?>
                    </select>
                    <select name="" class="tahun" required>
                        <?php
                        for($i=1970;$i<=2000;$i++){
                            echo"<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                        <input type="text" name="" placeholder="Kode Pos" required>
                        <input type="text" name="" placeholder="Email" required>
                        <input type="text" name="" placeholder="Username" required>
                        <input type="password" name="" placeholder="Password" required>
                    <textarea name="" placeholder="Alamat" required></textarea>
                        <a href="index.php"><button type="button" id="back"><span class="glyphicon glyphicon-arrow-left"></span> Back</button></a>
                        <button type="reset" id="reset"><span class="glyphicon glyphicon-repeat"></span> Reset</button>
                        <button type="submit" id="submit"><span class="glyphicon glyphicon-send"></span> Submit</button>
                    </form>
                <p>
                    <ul>
                        <li class="ketentuan-seller">Ketentuan Penjual &nbsp;</li>
                        <li> | </li>
                        <li class="kebijakan-seller">&nbsp;Kebijakan Penjual</li>
                </ul>
                </p>
                    </div>
                </div>    
                <div class="readme-penjual" id="penjual">
                    
                    <div class="ketentuan-penjual"></div>
                    <div class="kebijakan-penjual"></div>
                </div>
            </div>
        </div>
        <div class="login-penjual">
            <div class="content-login">
                <div class="readme-login-pembeli" id="log-in">
               
                </div>
                <div class="untuk-login" id="log-in">
                    <div class="forms-login-pembeli">
                    <div class="minitron-login">
                        <img src="img/logo-sponsor/logoputih.png">
                    </div>
                        <form action="proses/Proses_Login_Penjual.php" method="post">
                        <input type="text" name="user" placeholder="Username">
                        <input type="password" name="pass" placeholder="Password">
                        <a href="index.php"><button type="button" id="back"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp; Cancel</button></a>
                        <button type="submit" id="submit"><span class="glyphicon glyphicon-send"></span> &nbsp;Login</button>
                </form>
                    </div>
                </div>
            </div>
</div>
        <div class="login-pembeli">
           <div class="content-login">
                <div class="readme-login-pembeli" id="log-in">
               
                </div>
                <div class="untuk-login" id="log-in">
                    <div class="forms-login-pembeli">
                    <div class="minitron-login">
                        <img src="img/logo-sponsor/logoputih.png">
                    </div>
                        <form action="proses/Proses_Login_Konsumen.php" method="post">
                        <input type="text" name="user" placeholder="Username">
                        <input type="password" name="pass" placeholder="Password">
                        <a href="index.php"><button type="button" id="back"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp; Cancel</button></a>
                        <button type="submit" id="submit"><span class="glyphicon glyphicon-send"></span> &nbsp;Login</button>
                </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bantuan">
            <span class="glyphicon glyphicon-triangle-top" id="triangle"></span>
            <ul>
                <li>Pembayaran</li>
                <li>Pengiriman</li>
                <li>Status Pesanan</li>
                <li>Pengembalian Produk</li>
                <li>Cara Belanja</li>
                <li>Hubungi Kami</li>
            </ul>
</div>
        <div class="container">
        <div class="content">
            <div class="in-content" id="left-side">
                <div class="lf-atas">
                    <div class="isi-la" id="la-satu">
                        top of the week
                    </div>
                    <div class="isi-la" id="la-dua">
                        <div class="in-la">
                            <div class="img" id="isi-in"></div>
                            <div class="caption" id="isi-in"></div>
                        </div>
                        <div class="in-la">
                            <div class="img" id="isi-in"></div>
                            <div class="caption" id="isi-in"></div>
                        </div>
                        <div class="in-la">
                            <div class="img" id="isi-in"></div>
                            <div class="caption" id="isi-in"></div>
                        </div>
                        <div class="in-la">
                            <div class="img" id="isi-in"></div>
                            <div class="caption" id="isi-in"></div>
                        </div>
                        <div class="in-la">
                            <div class="img" id="isi-in"></div>
                            <div class="caption" id="isi-in"></div>
                        </div>
                        <div class="in-la">
                            <div class="img" id="isi-in"></div>
                            <div class="caption" id="isi-in"></div>
                        </div>
                        
                    </div>
                </div>
                <div class="lf-tengah">
                    <div class="isi-la" id="lt-satu">
                        top of the month
                    </div>
                    <div class="isi-la" id="lt-dua">
                        <div class="in-la">
                            <div class="img" id="isi-in"></div>
                            <div class="caption" id="isi-in"></div>
                        </div>
                        <div class="in-la">
                            <div class="img" id="isi-in"></div>
                            <div class="caption" id="isi-in"></div>
                        </div>
                        <div class="in-la">
                            <div class="img" id="isi-in"></div>
                            <div class="caption" id="isi-in"></div>
                        </div>
                        <div class="in-la">
                            <div class="img" id="isi-in"></div>
                            <div class="caption" id="isi-in"></div>
                        </div>
                        <div class="in-la">
                            <div class="img" id="isi-in"></div>
                            <div class="caption" id="isi-in"></div>
                        </div>
                        <div class="in-la">
                            <div class="img" id="isi-in"></div>
                            <div class="caption" id="isi-in"></div>
                        </div>
                    </div>
                </div>
                <div class="lf-bawah">
                    <div class="isi-la" id="la-satu">
                        top brand
                    </div>
                    <div class="isi-la" id="la-dua"></div>
                </div>
            </div>
            <div class="in-content" id="main">
                <div class="isi-content" id="content-tshirt">
                    <?php
                    while($skyrowtshirt = mysql_fetch_array($skyquerytshirt)){
                    ?>
                    <div class="show" id="show" onclick="hover()">
                        <img src="img/<?php echo $skyrowtshirt['Gambar_Produk'];?>">
                        <div class="in-show">
                            <ul>
                                <li class="li-satu">
                                    <?php echo $skyrowtshirt['Nama_Produk'];?>
                                </li>
                                <li class="li-dua">
                                    <?php echo "RP.".number_format( $skyrowtshirt['Harga']);?>
                                </li>
                            </ul>
                        </div>
                        <div class="keterangan" id="ket">
                            <a href="Form_Detail_Produk_Konsumen.php?ID=<?php echo $skyrowtshirt['ID_Produk']; ?>"><button type="button">Detail Barang</button></a>
                            <a href="form/keranjang.php"><button type="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                </button></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="isi-content" id="content-dress">
                    <?php while($skyrowdress = mysql_fetch_array($skyquerydress)){ ?>
                    <div class="show">
                        <img src="img/<?php echo $skyrowdress['Gambar_Produk'];?>">
                        <div class="in-show">
                            <ul>
                                <li class="li-satu">
                                    <?php echo $skyrowdress['Nama_Produk'];?>
                                </li>
                                <li class="li-dua">
                                    <?php echo "RP.".number_format( $skyrowdress['Harga']);?>
                                </li>
                            </ul>
                        </div>
                        <div class="keterangan" id="ket">
                            <a href="Form_Detail_Produk_Konsumen.php?ID=<?php echo $skyrowdress['ID_Produk']; ?>"><button type="button">Detail Barang</button></a>
                            <a href="../proses/Proses_Input_Keranjang_Konsumen.php?Input=Add&ID=<?php echo $skyrowdress['ID_Produk']; ?>"><button type="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                </button></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="isi-content" id="content-rok">
                    <?php while($skyrowrok = mysql_fetch_array($skyqueryrok)){ ?>
                    <div class="show">
                        <img src="img/<?php echo $skyrowrok['Gambar_Produk'];?>">
                        <div class="in-show">
                            <ul>
                                <li class="li-satu">
                                    <?php echo $skyrowrok['Nama_Produk'];?>
                                </li>
                                <li class="li-dua">
                                    <?php echo "RP.".number_format( $skyrowrok['Harga']);?>
                                </li>
                            </ul>
                        </div>
                        <div class="keterangan" id="ket">
                            <a href="Form_Detail_Produk_Konsumen.php?ID=<?php echo $skyrowrok['ID_Produk']; ?>"><button type="button">Detail Barang</button></a>
                            <a href="form/keranjang.php"><button type="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                </button></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="isi-content" id="content-jeans">
                    <?php while($skyrowjeans = mysql_fetch_array($skyqueryjeans)){ ?>
                    <div class="show">
                        <img src="img/<?php echo $skyrowjeans['Gambar_Produk'];?>">
                        <div class="in-show">
                            <ul>
                                <li class="li-satu">
                                    <?php echo $skyrowjeans['Nama_Produk'];?>
                                </li>
                                <li class="li-dua">
                                    <?php echo "RP.".number_format( $skyrowjeans['Harga']);?>
                                </li>
                            </ul>
                        </div>
                        <div class="keterangan" id="ket">
                            <a href="Form_Detail_Produk_Konsumen.php?ID=<?php echo $skyrowjeans['ID_Produk']; ?>"><button type="button">Detail Barang</button></a>
                            <a href="form/keranjang.php"><button type="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                </button></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="isi-content" id="content-baby">
                    <?php while($skyrowbaby = mysql_fetch_array($skyquerybaby)){ ?>
                    <div class="show">
                        <img src="img/<?php echo $skyrowbaby['Gambar_Produk'];?>">
                        <div class="in-show">
                            <ul>
                                <li class="li-satu">
                                    <?php echo $skyrowbaby['Nama_Produk'];?>
                                </li>
                                <li class="li-dua">
                                    <?php echo "RP.".number_format( $skyrowbaby['Harga']);?>
                                </li>
                            </ul>
                        </div>
                        <div class="keterangan" id="ket">
                            <a href="Form_Detail_Produk_Konsumen.php?ID=<?php echo $skyrowbaby['ID_Produk']; ?>"><button type="button">Detail Barang</button></a>
                            <a href="form/keranjang.php"><button type="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                </button></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="isi-content" id="content-muslim">
                    <?php while($skyrowmuslim= mysql_fetch_array($skyquerymuslim)){ ?>
                    <div class="show">
                        <img src="img/<?php echo $skyrowmuslim['Gambar_Produk'];?>">
                        <div class="in-show">
                            <ul>
                                <li class="li-satu">
                                    <?php echo $skyrowmuslim['Nama_Produk'];?>
                                </li>
                                <li class="li-dua">
                                    <?php echo "RP.".number_format( $skyrowmuslim['Harga']);?>
                                </li>
                            </ul>
                        </div>
                        <div class="keterangan" id="ket">
                            <a href="Form_Detail_Produk_Konsumen.php?ID=<?php echo $skyrowmuslim['ID_Produk']; ?>"><button type="button">Detail Barang</button></a>
                            <a href="form/keranjang.php"><button type="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                </button></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="isi-content" id="content-kemeja">
                    <?php while($skyrowkemeja = mysql_fetch_array($skyquerykemeja)){ ?>
                    <div class="show">
                        <img src="img/<?php echo $skyrowkemeja['Gambar_Produk'];?>">
                        <div class="in-show">
                            <ul>
                                <li class="li-satu">
                                    <?php echo $skyrowkemeja['Nama_Produk'];?>
                                </li>
                                <li class="li-dua">
                                    <?php echo "RP.".number_format( $skyrowkemeja['Harga']);?>
                                </li>
                            </ul>
                        </div>
                        <div class="keterangan" id="ket">
                            <a href="Form_Detail_Produk_Konsumen.php?ID=<?php echo $skyrowkemeja['ID_Produk']; ?>"><button type="button">Detail Barang</button></a>
                            <a href="form/keranjang.php"><button type="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                </button></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="isi-content" id="content-blezer">
                    <?php while($skyrowblezer = mysql_fetch_array($skyqueryblezer)){ ?>
                    <div class="show">
                        <img src="img/<?php echo $skyrowblezer['Gambar_Produk'];?>">
                        <div class="in-show">
                            <ul>
                                <li class="li-satu">
                                    <?php echo $skyrowblezer['Nama_Produk'];?>
                                </li>
                                <li class="li-dua">
                                    <?php echo "RP.".number_format( $skyrowblezer['Harga']);?>
                                </li>
                            </ul>
                        </div>
                        <div class="keterangan" id="ket">
                            <a href="Form_Detail_Produk_Konsumen.php?ID=<?php echo $skyrowblezer['ID_Produk']; ?>"><button type="button">Detail Barang</button></a>
                            <a href="form/keranjang.php"><button type="button">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                </button></a>
                        </div>
                    </div>
                    <?php } ?>
                </div> 
            </div>
</div>
</div>
        <div class="right-side">
            <ul>
                <li class="li-kat-tshirt" id="li-kat-satu"><p>t</p>
                </li>
                <li class="li-kat-dress" id="li-kat-dua"><p>s</p></li>
                <li class="li-kat-rok" id="li-kat-tiga"><p>k</p></li>
                <li class="li-kat-jeans" id="li-kat-empat"><p>s</p></li>
                <li class="li-kat-baby" id="li-kat-lima"><p>y</p></li>
                <li class="li-kat-muslim" id="li-kat-enam"><p>m</p></li>
                <li class="li-kat-kemeja" id="li-kat-tujuh"><p>a</p></li>
                <li class="li-kat-blezer" id="li-kat-delapan"><p>z</p></li>
            </ul>
</div>
        <footer>
            <div class="footer-atas">
                <div class="shadow-footer">
                    <div class="in-shadow-footer" id="in-satu">
                        <div class="in-shadow">
                           <!-- <ul>
                                <li><button><span class="glyphicon glyphicon-map-marker"></span></button> Bayar Ditempat</li>
                                <li><button><span class="glyphicon glyphicon-plane"></span></button> Gratis Ongkir</li>
                                <li><button><span class="glyphicon glyphicon-usd"></span></button> Cicilan 0%</li>
                                <li><button><span class="glyphicon glyphicon-transfer"></span></button> Beragam Cara Pembayaran</li>
                                <li><button><span class="glyphicon glyphicon-ok-sign"></span></button> Keamanan Dalam Berbelanja</li>
                            </ul>-->
                        </div>
                        <div class="content-footer" id="content-id-satu">
                        <p>CARA PEMBAYARAN</p>
                            <img src="img/logo-sponsor/carapemayaran.png">
                        </div>
                        <div class="content-footer" id="content-id-dua">
                        <p>CICILAN 0%</p>
                            <img src="img/logo-sponsor/cicilan.png"></div>
                        <div class="content-footer" id="content-id-tiga">
                        <p class="p-keamanan">KEAMANAN BERBELANJA</p>
                            <img src="img/logo-sponsor/license.png" id="img-keamanan">
                            <p id="p-jasa">JASA PENGIRIMAN</p>
                            <img src="img/logo-sponsor/pengiriman.png" id="img-jasa"></div>
                    </div>
                    <div class="in-shadow-footer" id="in-dua">
                        <div class="in-shadow-tengah">
                            <img src="img/logo-sponsor/log.png">
                        </div>
                        <div class="content-footer" id="cf-satu">
                            <p>BANTUAN</p>
                            <ul>
                                <li>Pembayaran</li>
                                <li>Pengiriman</li>
                                <li>Status Pesanan</li>
                                <li>Pengembalian Produk</li>
                                <li>Cara Belanja</li>
                                <li>Hubungi Kami</li>
                            </ul>
                        </div>
                        <div class="content-footer" id="cf-dua">
                            <p>CUSTOMER CARE</p>
                            <ul>
                                <li>Buka 24 jam setiap hari</li>
                                <li><span class="glyphicon glyphicon-earphone"></span> &nbsp; 021 2 527 295</li>
                                <li><span class="glyphicon glyphicon-envelope"></span> &nbsp; customer.care@skyler.com</li>
                                <li id="live-chat"><span class="glyphicon glyphicon-comment"></span> &nbsp; live Chat</li>
                                <li id="bantuan">Saya butuh bantuan</li>
                                
                            </ul>
                        </div>
                        <div class="content-footer" id="cf-tiga">
                            <p>INFO SKYLER.COM</p>
                            <ul>
                                <li>Tentang Skyler.com</li>
                                <li>Blog Skyler</li>
                                <li>Newsletter</li>
                                <li>Media &amp; Pers</li>
                                <li>Kabar Terbaru</li>
                                <li>Daftar Brand</li>
                                <li>Karir</li>
                                <li>Ulasan Puas</li>
                                <li>Blog Competition</li>
                            </ul>
                        </div>
                        <div class="content-footer" id="cf-empat">
                            <p>NEWSLETTER</p>
                            <div class="newsletter">
                                <form action="#" method="post">
                                    <input type="text" name="" placeholder="Alamat Email Anda" required>
                                    <input type="checkbox" name=""> &nbsp; Pria
                                    <input type="checkbox" name=""> &nbsp; Wanita
                                    <button type="submit"><span class="glyphicon glyphicon-send"></span> &nbsp; DAFTAR</button>
                                </form>
                            </div>
                        </div>
                        <div class="content-footer" id="cf-lima">
                            <p> FOLLOW US</p>
                            <img src="img/logo-sponsor/follow.png" id="img-follow">
                            <img src="img/logo-sponsor/follow2.png" id="img-follow">
                            <p> DOWNLOAD APPS</p>
                            <img src="img/logo-sponsor/windows.png" id="img-logo-footer">
                            <img src="img/logo-sponsor/playstore.png" id="img-logo-footer">
                            <img src="img/logo-sponsor/googleplay.png" id="img-logo-footer">
                        </div>
                    </div>
                    <div class="in-shadow-footer" id="in-tiga">
                        <p>Skyler.com Toko Online Khusus Untuk Pakaian Terlengkap & Terpercaya !<br>Sebagai salah satu pelopor <b><i>Butik Online</i></b> di Indonesia, Skyler.com hadir dengan beragam produk pilihan yang disertai promo istimewa & menarik setiap hari. Skyler menawarkan pengalaman belanja online cepat, aman dan nyaman. Skyler selalu berjuang untuk memberikan pelanggan yang terbaik termasuk dengan menawarkan bebrapa metode pembayaran. Pengembalian gratis dengan layanan konsumen yang baik. Sebagai situs belanja online terbaik di Indonesia, Skyler selalu menyediakan deretan produk tak terhitung jumlahnya yang selau di update tiap hari. Kami selalu mamastikan bahwa anda mendapatkan penawaran terbaru dan terbaik lewat promo - promo kami. Kami menawarkan kualitas produk terbaik yang akan anda temukan semua pada ujung jari anda. Jadi mulailah belanja online dan jika anda punya pertayaan silahkan telepon atau email kami. Selain menyediakan pengalaman beli online yang lengkap dan mudah bagi konsumen, Skyler.com juga memastikan kepuasan seller untuk jual online produk merekan dengan berbagai dukungan yang maksimal. Sehingga sinergi antara pelanggan dan seller menciptakan budaya jual beli inline terbaik di Indonesia. Sesuai dangan tagline kami <b>"We Promise Comfort"</b> kami selalu menjanjikan kenyaman berbelanja bagi kosumen dengan menyediakan website yang mudah digunakan dan sistem pembayaran online yang lengkap. Kami menjamin kenyamanan anda ketika anda browsing produk yang sedang dicari dan juga menjamin opsi pembayaran yang aman. Pilihan pembayaran kami termasuk kartu kredit, cash on delivery, bank transfer, Mobile Banking dan bahkan melalui layanan pembayaran online seperti Paypal. Dan jika anda ingin membawa keranjang belanja anda dimana pun anda pergi, Skyler App ada untuk  membantu anda  menelusuri Skyler, membeli barang - barang dan tetap update dengan promo terbaru kami.
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-bawah">
                <div class="content-footer-bawah">
                    <p>Copyright &copy; 2016 Skyler.com toko online khusus pakaian dengan beragam merk branded<br>All Rights Reserved.<br><span>Syarat & Ketentuan</span> | <span>Kebijakan Privasi</span></p>
                </div>
            </div>
        </footer>
    </body>
</html>