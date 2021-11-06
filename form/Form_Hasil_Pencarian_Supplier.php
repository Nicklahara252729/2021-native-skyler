<!DOCTYPE HTML>
<?php 
session_start();
include "../proses/koneksi.php";
$skypencarian = $_POST['Pencarian'];
$skyquerytshirt = mysql_query("SELECT * FROM produk WHERE Kategori='Tshirt' AND Nama_Produk LIKE '%$skypencarian%'");
$skyquerydress = mysql_query("SELECT * FROM produk WHERE Kategori='Dress' AND Nama_Produk LIKE '%$skypencarian%'");
$skyqueryrok = mysql_query("SELECT * FROM produk WHERE Kategori='Rok' AND Nama_Produk LIKE '%$skypencarian%'");
$skyqueryjeans = mysql_query("SELECT * FROM produk WHERE Kategori='Jeans' AND Nama_Produk LIKE '%$skypencarian%'");
$skyquerybaby = mysql_query("SELECT * FROM produk WHERE Kategori='Baby' AND Nama_Produk LIKE '%$skypencarian%'");
$skyquerymuslim = mysql_query("SELECT * FROM produk WHERE Kategori='Muslim' AND Nama_Produk LIKE '%$skypencarian%'");
$skyquerykemeja = mysql_query("SELECT * FROM produk WHERE Kategori='Kemeja' AND Nama_Produk LIKE '%$skypencarian%'");
$skyqueryblezer = mysql_query("SELECT * FROM produk WHERE Kategori='Blezer' AND Nama_Produk LIKE '%$skypencarian%'");
$skyt = 0;
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link href="../img/logo-sponsor/icon-hitam.png" rel="icon">
        <title>SKYLER | We Promise Comfort</title>
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/skyler.css" rel="stylesheet">
        <script src="../js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="../js/skyler.js" type="text/javascript"></script>
    </head>
    <body>
        <a href="#" class="top"><span class="glyphicon glyphicon-arrow-up"></span></a>
        <div class="bungkus-header">
        <header>
            <div class="atas">
                <img src="../img/logo-sponsor/playstore.png" class="app1">
                <img src="../img/logo-sponsor/windows.png" class="app2">
                <img src="../img/logo-sponsor/googleplay.png" >
                <ul>
                    <li class="li-download">Mobile Version<span class="glyphicon glyphicon-phone"></span></li>
                    <li class="li-bantuan">Bantuan <span class="glyphicon glyphicon-question-sign"></span></li>
                    <li class="li-registrasi">Supplier Aktif : <?php echo $_SESSION['user_supplier'] ;?><span class="glyphicon glyphicon-user"></span>                        
                    </li>
                    <li class="li-pengaturan">Pengaturan <span class="glyphicon glyphicon-cog"></span></li>
                    
                </ul>
            </div>
            <img src="../img/logo-sponsor/logoputih.png">
            <div class="promo">
               <form action="Form_Hasil_Pencarian_Supplier.php" method="post">
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
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            <div class="isi-column-kategori"></div>
                                            
                                            
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
                                            
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php
                    include "../proses/koneksi.php";
                    $skyqueryj = mysql_query("SELECT * FROM cart");
                    $skyjum = mysql_num_rows($skyqueryj);
                    ?>
                    <a href="Form_Keranjang.php"><li><span class="glyphicon glyphicon-shopping-cart"><?php  echo $skyjum ;?></span></li></a>
                    <li><a href="Form_Supplier.php">HIGHLIGHTS</a></li>
                    <li><a href="Form_NewBrand_Supplier.php">NEW BRAND</a></li>
                    <li>DISCOUNT</li>
                    
                </ul>
            </div>
            </div>
            </div>
        <div class="subheader" id="sb">
            <img src="../img/logo-sponsor/logo.png">
            <form action="Form_Hasil_Pencarian_Supplier.php" method="post">
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
                <input type="text" name="Pencarian" placeholder="Cari Pakaian, atau merk" required>
                <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </form>
            <div class="shop">
                <a href="Form_Keranjang.php"><span class="glyphicon glyphicon-shopping-cart"></span></a>
            </div>
            <div class="menu-hamburger" id="mh" onclick="muncul()">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </div>
            <div id="bawah-subheader">
                <div class="in-bawah-subheader">
                    <ul>
                        <li>HIGHLIGHTS</li>
                        <li>NEW BRAND</li>
                        <li>DISCOUNT</li>
                        
                    </ul>
                </div>
            </div>
        </div> 
        <div class="pengaturan-supplier">
            <span class="glyphicon glyphicon-triangle-top" id="triangle-top"></span>
            <ul>
                <li class="pengaturan-akun"> <span class="glyphicon glyphicon-log-in"></span> &nbsp; <a href="Form_PengaturanAkun_Supplier.php">Pengaturan Akun</a></li>
                <li class="pengaturan-barang"> <span class="glyphicon glyphicon-log-in"></span> &nbsp; <a href="Form_PengaturanBarang_Supplier.php">Pengaturan Barang</a></li>
                <li class="logout"> <span class="glyphicon glyphicon-log-in"></span> &nbsp; <a href="../index.php">Logout</a></li>
            </ul>
        </div>
        
        <div class="bantuan">
            <span class="glyphicon glyphicon-triangle-top" id="triangle-top-supplier"></span>
            <ul>
                <li>Pembayaran</li>
                <li>Pengiriman</li>
                <li>Status Pesanan</li>
                <li>Pengembalian Produk</li>
                <li>Cara Belanja</li>
                <li>Hubungi Kami</li>
            </ul>
</div>
        <div class="left-side">Test</div>
        <div class="content">
            <?php function tshirt_hilang() {
            $skypencarian = $_POST['Pencarian'];
            $skyquerytshirt = mysql_query("SELECT * FROM produk WHERE Kategori='Tshirt' AND Nama_Produk LIKE '%$skypencarian%' ");
            $skyrowtshirt = mysql_fetch_array($skyquerytshirt);
                if ($skyrowtshirt){}
                    else{
                         echo "T-Shirt Tidak Ditemukan";
                    }
            }?>
            <?php function dress_hilang() {
            $skypencarian = $_POST['Pencarian'];
            $skyquerydress = mysql_query("SELECT * FROM produk WHERE Kategori='Dress' AND Nama_Produk LIKE '%$skypencarian%' ");
            $skyrowdress = mysql_fetch_array($skyquerydress);
                if ($skyrowdress){}
                    else{
                         echo "Dress Tidak Ditemukan";
                    }
            }?>
            <?php function rok_hilang() {
            $skypencarian = $_POST['Pencarian'];
            $skyqueryrok = mysql_query("SELECT * FROM produk WHERE Kategori='Rok' AND Nama_Produk LIKE '%$skypencarian%' ");
            $skyrowrok = mysql_fetch_array($skyqueryrok);
                if ($skyrowrok){}
                    else{
                         echo "Rok Tidak Ditemukan";
                    }
            }?>
            <?php function jeans_hilang() {
            $skypencarian = $_POST['Pencarian'];
            $skyqueryjeans = mysql_query("SELECT * FROM produk WHERE Kategori='Jeans' AND Nama_Produk LIKE '%$skypencarian%' ");
            $skyrowjeans = mysql_fetch_array($skyqueryjeans);
                if ($skyrowjeans){}
                    else{
                         echo "Jeans Tidak Ditemukan";
                    }
            }?>
            <?php function baby_hilang() {
            $skypencarian = $_POST['Pencarian'];
            $skyquerybaby = mysql_query("SELECT * FROM produk WHERE Kategori='Baby' AND Nama_Produk LIKE '%$skypencarian%' ");
            $skyrowbaby = mysql_fetch_array($skyquerybaby);
                if ($skyrowbaby){}
                    else{
                         echo "Baju Baby Tidak Ditemukan";
                    }
            }?>
            <?php function muslim_hilang() {
            $skypencarian = $_POST['Pencarian'];
            $skyquerymuslim = mysql_query("SELECT * FROM produk WHERE Kategori='Muslim' AND Nama_Produk LIKE '%$skypencarian%' ");
            $skyrowmuslim = mysql_fetch_array($skyquerymuslim);
                if ($skyrowmuslim){}
                    else{
                         echo "Baju Muslim Tidak Ditemukan";
                    }
            }?>
            <?php function kemeja_hilang() {
            $skypencarian = $_POST['Pencarian'];
            $skyquerykemeja = mysql_query("SELECT * FROM produk WHERE Kategori='Kemeja' AND Nama_Produk LIKE '%$skypencarian%' ");
            $skyrowkemeja = mysql_fetch_array($skyquerykemeja);
                if ($skyrowkemeja){}
                    else{
                         echo "Kemeja Tidak Ditemukan";
                    }
            }?>
            <?php function blezer_hilang() {
            $skypencarian = $_POST['Pencarian'];
            $skyqueryblezer = mysql_query("SELECT * FROM produk WHERE Kategori='Blezer' AND Nama_Produk LIKE '%$skypencarian%' ");
            $skyrowblezer = mysql_fetch_array($skyqueryblezer);
                if ($skyrowblezer){}
                    else{
                         echo "Blezer Tidak Ditemukan";
                    }
            }?>
            <font size="7">Hasil Pencarian Dari "<?php echo $_POST['Pencarian'] ;?>"</font>
            <div class="isi-content" id="content-tshirt"> 
            <?php while($skyrowtshirt = mysql_fetch_array($skyquerytshirt)){ ;?>
            <?php echo "<a href='Form_Detail_Produk.php?ID=".$skyrowtshirt['ID_Produk']."'>";?>
            <img src="../uploaded/<?php echo $skyrowtshirt['Gambar_Produk'];?>" width="100px" height="100px">
            <?php echo $skyrowtshirt['Nama_Produk'] ;?>&nbsp;&nbsp;
            <?php } ?>
            <?php echo"</a>";?>
            <?php tshirt_hilang();?>
            </div>
            
            <div class="isi-content" id="content-dress">        
            <?php while($skyrowdress = mysql_fetch_array($skyquerydress)){ ;?>
            <?php echo "<a href='Form_Detail_Produk.php?ID=".$skyrowdress['ID_Produk']."'>";?>
            <img src="../uploaded/<?php echo $skyrowdress['Gambar_Produk'];?>" width="100px" height="100px">
            <?php echo $skyrowdress['Nama_Produk'] ;?>&nbsp;&nbsp;
            <?php } ?><?php echo"</a>";?>
            <?php dress_hilang() ;?>
            </div>
            
            <div class="isi-content" id="content-rok">
            <?php while($skyrowrok = mysql_fetch_array($skyqueryrok)){ ;?>
            <?php echo "<a href='Form_Detail_Produk.php?ID=".$skyrowrok['ID_Produk']."'>";?>
            <img src="../uploaded/<?php echo $skyrowrok['Gambar_Produk'];?>" width="100px" height="100px">
            <?php echo $skyrowrok['Nama_Produk'] ;?>&nbsp;&nbsp;
            <?php } ?><?php echo"</a>";?>
            <?php rok_hilang() ;?>
            </div>
            
            <div class="isi-content" id="content-jeans">
            <?php while($skyrowjeans = mysql_fetch_array($skyqueryjeans)){ ;?>
            <?php echo "<a href='Form_Detail_Produk.php?ID=".$skyrowjeans['ID_Produk']."'>";?>
            <img src="../uploaded/<?php echo $skyrowjeans['Gambar_Produk'];?>" width="100px" height="100px">
            <?php echo $skyrowjeans['Nama_Produk'] ;?>&nbsp;&nbsp;
            <?php } ?><?php echo"</a>";?>
            <?php jeans_hilang(); ?>
            </div>
            
            <div class="isi-content" id="content-baby">
            <?php while($skyrowbaby = mysql_fetch_array($skyquerybaby)){ ;?>
            <?php echo "<a href='Form_Detail_Produk.php?ID=".$skyrowbaby['ID_Produk']."'>";?>
            <img src="../uploaded/<?php echo $skyrowbaby['Gambar_Produk'];?>" width="100px" height="100px">
            <?php echo $skyrowbaby['Nama_Produk'] ;?>&nbsp;&nbsp;
            <?php } ?><?php echo"</a>";?>
            <?php baby_hilang(); ?>
            </div>
            
            <div class="isi-content" id="content-muslim">
            <?php while($skyrowmuslim= mysql_fetch_array($skyquerymuslim)){ ;?>
            <?php echo "<a href='Form_Detail_Produk.php?ID=".$skyrowmuslim['ID_Produk']."'>";?>
            <img src="../uploaded/<?php echo $skyrowmuslim['Gambar_Produk'];?>" width="100px" height="100px">
            <?php echo $skyrowmuslim['Nama_Produk'] ;?>&nbsp;&nbsp;
            <?php } ?><?php echo"</a>";?>
            <?php muslim_hilang(); ?>
            </div>
            
            <div class="isi-content" id="content-kemeja">
            <?php while($skyrowkemeja = mysql_fetch_array($skyquerykemeja)){ ;?>
            <?php echo "<a href='Form_Detail_Produk.php?ID=".$skyrowkemeja['ID_Produk']."'>";?>
            <img src="../uploaded/<?php echo $skyrowkemeja['Gambar_Produk'];?>" width="100px" height="100px">
            <?php echo $skyrowkemeja['Nama_Produk'] ;?>&nbsp;&nbsp;
            <?php } ?><?php echo"</a>";?>
            <?php kemeja_hilang(); ?>
            </div>
            
            <div class="isi-content" id="content-blezer">
            <?php while($skyrowblezer = mysql_fetch_array($skyqueryblezer)){ ;?>
            <?php echo "<a href='Form_Detail_Produk.php?ID=".$skyrowblezer['ID_Produk']."'>";?>
            <img src="../uploaded/<?php echo $skyrowblezer['Gambar_Produk'];?>" width="100px" height="100px">
            <?php echo $skyrowblezer['Nama_Produk'] ;?>&nbsp;&nbsp;
            <?php } ?><?php echo"</a>";?>
            <?php blezer_hilang(); ?>
            </div>
</div>
        <div class="right-side">
            <ul>
                <li class="li-kat-tshirt" id="li-kat-satu"><p>t</p>
                </li>
                <li class="li-kat-dress" id="li-kat-dua"><p>d</p></li>
                <li class="li-kat-rok" id="li-kat-tiga"><p>r</p></li>
                <li class="li-kat-jeans" id="li-kat-empat"><p>j</p></li>
                <li class="li-kat-baby" id="li-kat-lima"><p>b</p></li>
                <li class="li-kat-muslim" id="li-kat-enam"><p>m</p></li>
                <li class="li-kat-kemeja" id="li-kat-tujuh"><p>k</p></li>
                <li class="li-kat-blezer" id="li-kat-delapan"><p>b</p></li>
            </ul>
</div>
        <footer>
            <div class="footer-atas">
                <div class="shadow-footer">
                    <div class="in-shadow-footer" id="in-satu">
                        <div class="in-shadow">
                            <ul>
                                <li><button><span class="glyphicon glyphicon-map-marker"></span></button> Bayar Ditempat</li>
                                <li><button><span class="glyphicon glyphicon-plane"></span></button> Gratis Ongkir</li>
                                <li><button><span class="glyphicon glyphicon-usd"></span></button> Cicilan 0%</li>
                                <li><button><span class="glyphicon glyphicon-transfer"></span></button> Beragam Cara Pembayaran</li>
                                <li><button><span class="glyphicon glyphicon-ok-sign"></span></button> Keamanan Dalam Berbelanja</li>
                            </ul>
                        </div>
                        <div class="content-footer" id="content-id-satu">
                        <p>CARA PEMBAYARAN</p>
                            <img src="../img/logo-sponsor/carapemayaran.png">
                        </div>
                        <div class="content-footer" id="content-id-dua">
                        <p>CICILAN 0%</p>
                            <img src="../img/logo-sponsor/cicilan.png"></div>
                        <div class="content-footer" id="content-id-tiga">
                        <p class="p-keamanan">KEAMANAN BERBELANJA</p>
                            <img src="../img/logo-sponsor/license.png" id="img-keamanan">
                            <p id="p-jasa">JASA PENGIRIMAN</p>
                            <img src="../img/logo-sponsor/pengiriman.png" id="img-jasa"></div>
                    </div>
                    <div class="in-shadow-footer" id="in-dua">
                        <div class="in-shadow-tengah">
                            <ul>
                                <li><img src="../img/logo-sponsor/1472173795907.png"></li>
                                <li><img src="../img/logo-sponsor/1472173799041.png"></li>
                                <li><img src="../img/logo-sponsor/1472173801552.png"></li>
                                <li><img src="../img/logo-sponsor/1472173805213.png"></li>
                                <li><img src="../img/logo-sponsor/1472173806998.png"></li>
                                <li><img src="../img/logo-sponsor/1472173808284.png"></li>
                                <li><img src="../img/logo-sponsor/1472173809398.png"></li>
                                <li><img src="../img/logo-sponsor/1472173810473.png"></li>
                                <li><img src="../img/logo-sponsor/1472173812705.png"></li>
                            </ul>
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
                            <img src="../img/logo-sponsor/follow.png" id="img-follow">
                            <img src="../img/logo-sponsor/follow2.png" id="img-follow">
                            <p> DOWNLOAD APPS</p>
                            <img src="../img/logo-sponsor/windows.png" id="img-logo-footer">
                            <img src="../img/logo-sponsor/playstore.png" id="img-logo-footer">
                            <img src="../img/logo-sponsor/googleplay.png" id="img-logo-footer">
                        </div>
                    </div>
                    <div class="in-shadow-footer" id="in-tiga">
                        <p>Skyler.com deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsideskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi  deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi  deskirpsi  deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi  deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi  deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsideskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi  deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi  deskirpsi  deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi  deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi deskirpsi</p>
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