<!DOCTYPE HTML>
<?php
session_start();
if (isset ($_SESSION['user_konsumen'])) {
?>
<?php 
include "../proses/koneksi.php";

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
                    <li class="li-registrasi">Pembeli Aktif : <?php echo $_SESSION['user_konsumen'] ;?><span class="glyphicon glyphicon-user"></span>                        
                    </li>
                    <li class="li-pengaturan">Pengaturan <span class="glyphicon glyphicon-cog"></span></li>
                    
                </ul>
            </div>
            <img src="../img/logo-sponsor/logoputih.png">
            <div class="promo">
               <form action="Form_Hasil_Pencarian_Konsumen.php" method="post">
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
                    $sesid = session_id();
                    $skyqueryj = mysql_query("SELECT * FROM cart WHERE ID_Session='$sesid'");
                    $skyjum = mysql_num_rows($skyqueryj);
                    ?>
                    <a href="Form_Keranjang_Konsumen.php"><li><span class="glyphicon glyphicon-shopping-cart"><?php  echo $skyjum ;?></span></li></a>
                    <li><a href="Form_Konsumen.php">HIGHLIGHTS</a></li>
                    <li><a href="Form_NewBrand_Konsumen.php">NEW BRAND</a></li>
                    <li>DISCOUNT</li>
                    
                </ul>
            </div>
            </div>
            </div>
        <div class="subheader" id="sb">
            <img src="../img/logo-sponsor/logo.png">
            <form action="Form_Hasil_Pencarian_Konsumen.php" method="post">
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
                <a href="Form_Keranjang_Konsumen.php"><span class="glyphicon glyphicon-shopping-cart"></span></a>
            </div>
            <div class="menu-hamburger" id="mh" onclick="muncul()">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </div>
            <div id="bawah-subheader">
                <div class="in-bawah-subheader">
                    <ul>
                        <li><a href="Form_Konsumen.php">HIGHLIGHTS</a></li>
                        <li><a href="Form_NewBrand_Konsumen.php">NEW BRAND</a></li>
                        <li>DISCOUNT</li>
                        
                    </ul>
                </div>
            </div>
        </div> 
        <div class="pengaturan-supplier">
            <span class="glyphicon glyphicon-triangle-top" id="triangle-top"></span>
            <ul>
                <li class="pengaturan-akun"> <span class="glyphicon glyphicon-log-in"></span> &nbsp; <a href="Form_PengaturanAkun_Konsumen.php">Pengaturan Akun</a></li>
                <li class="pengaturan-barang"> <span class="glyphicon glyphicon-log-in"></span> &nbsp; <a href="Form_PengaturanBarang_Konsumen.php">Pengaturan Barang</a></li>
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
        
        <div class="content-keranjang">
            Form Pemesanan Keranjang Belanja<br><br>
            <table style="border:3px solid black;text-align:center;">
            
<?php 
    $sesid = session_id();
    $akun = $_SESSION['user_konsumen'];
    $j = 0;
      
    $skyquery2 = mysql_query("SELECT * FROM cart WHERE ID_Session='$sesid'");
    $skyrow2 = mysql_fetch_array($skyquery2);
    $jumlah = mysql_num_rows($skyquery2);
    if ($jumlah < 1){
        echo"<script>window.alert('Keranjang Belanja Kosong');
            window.location=('Form_Konsumen.php')</script>";
} 
    
echo "<form action='../proses/Proses_Transaksi_Keranjang.php?Supp=".$skyrow2['Supplier']."&ID=".$skyrow2['ID_Produk']."' method='post'>";
    $skyquery = mysql_query("SELECT * FROM cart WHERE ID_Session='$sesid'");
    while ($skyrow = mysql_fetch_array($skyquery)){
    
?>
            <?php echo $j+1 ;?><br>
            
            Nama Produk : <input readonly type="text" name="Produk[]" value="<?php echo $skyrow['Nama_Produk']; ?>"><br>
            Jumlah Pembelian : <input type="text" name="Jumlah[]" required><br>
            Harga Satuan : <input readonly type="text" name="Harga[]" value="<?php echo $skyrow['Harga'] ;?>"><br>
            Nama : <input type="text" name="Nama[]" required><br>
            Alamat Lengkap : <input type="text" name="Alamat[]" required><br>
            Kode Pos : <input type="text" name="Kode[]" required><br>
            Email : <input type="text" name="Email[]" required><br>
            No HP Yg Bisa Dihubungi : <input type="text" name="HP[]" required><br><br><br>
            <?php $j++; } ?>
            <br>
            <input type="submit" value="Pesan">
            <?php echo "</form>";?>
            </table><br>
            <a href="Form_Konsumen.php">Kembali</a>
            </div>
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