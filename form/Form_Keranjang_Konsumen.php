<?php
session_start();
include"../proses/koneksi.php";
if (isset ($_SESSION['user_konsumen'])) {
$user   =$_SESSION['user_konsumen'];
$jenkel =$_SESSION['jenkel'];
$kota   =$_SESSION['kota'];
$alamat =$_SESSION['alamat'];
$email  =$_SESSION['email'];
$jenis  =$_SESSION['jenis'];
$nama   =$_SESSION['nama'];
$idses  =session_id();
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link href="../img/logo-sponsor/icon-hitam.png" rel="icon">
        <title>SKYLER | <?php echo $nama; ?></title>
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
                    <li class="li-registrasi"><?php echo $nama; ?> <span class="glyphicon glyphicon-chevron-down"></span>
                        
                    </li>
                    <li class="li-login">Setting <span class="glyphicon glyphicon-chevron-down"></span></li>
                </ul>
            </div>
                        <a href="Form_Konsumen.php"><img src="../img/logo-sponsor/logoputih.png"></a>
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
                    <?php 
                    $skyqueryj = mysql_query("SELECT sum(Jumlah) as total FROM cart where User='$user'");
                    $skyjum = mysql_fetch_array($skyqueryj);
                    ?>
                    <a href="Form_Keranjang_Konsumen.php"><li><span class="glyphicon glyphicon-shopping-cart"><?php  echo $skyjum['total'];?></span></li></a>
                    <li>HIGHLIGHTS</li>
                    <li>NEW BRAND</li>
                    <li>DISCOUNT</li>
                    
                </ul>
            </div>
            </div>
            </div>
        <div class="subheader" id="sb">
            <div class="in-subheader">
                <div class="count-subheader" id="count-satu">
                    <a href="Form_Konsumen.php"><img src="../img/logo-sponsor/logo.png"></a>
                </div>
                <div class="count-subheader" id="count-dua">
                    <div class="in-count-tiga" id="in-count-satu">
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
                    </ul>
                </div>
            </div>
        </div>
        <div class="login">
            <span class="glyphicon glyphicon-triangle-top" id="triangle-top"></span>
            <ul>
                <li class="signin-pembeli"> <span class="glyphicon glyphicon-erase"></span> &nbsp; Change Data</li>
                <li class="signin-penjual" onclick="location.href='../index.php'"> <span class="glyphicon glyphicon-log-out"></span> &nbsp; Logout</li>
            </ul>
        </div>
        <div class="registrasi">
            <span class="glyphicon glyphicon-triangle-top" id="triangle"></span>
            <ul>
                <li class="regist-pembeli"> <span class="glyphicon glyphicon-bell"></span> &nbsp; Nofitication</li>
                <li class="regist-penjual"> <span class="glyphicon glyphicon-user"></span> &nbsp; Profil</li>
                <li class="regist-penjual"> <span class="glyphicon glyphicon-shopping-cart"></span> &nbsp; Keranjang</li>
            </ul>
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
              <div class="in-content" id="main-cari">
                  <div id="content-tshirt">
                      <?php
    $skysqlcart = mysql_query("select a.ID_Produk, a.Nama_Produk, a.Gambar_Produk, a.Kategori, a.Ukuran, a.Warna, a.Stok, a.Harga, a.Supplier, a.Bahan, a.Model, a.Kualitas, b.ID_Keranjang, b.ID_Produk, b.ID_Session, b.Jumlah, b.User from produk a inner join cart b on a.ID_Produk=b.ID_Produk where User='$user'");
    ?>
                      <table>
                          <tr>
                              <th>No</th>
                              <th>Gambar</th>
                              <th>Nama Produk</th>
                              <th>Kategori</th>
                              <th>Ukuran</th>
                              <th>Bahan</th>
                              <th>Model</th>
                              <th>Kualitas</th>
                              <th>Jumlah Barang</th>
                              <th>Harga</th>
                              <th>Total</th>
                              <th>Tindakan</th>
                          </tr>
                          <?php
    $no=1;
                          while ($skyrowcart = mysql_fetch_array($skysqlcart)){
                              if($no%2==0){
                                  $warna = "#f8f8f8";
                              }else{
                                  $warna = "white";
                              }
                              ?>
                          <tr bgcolor="<?php echo $warna; ?>">
                              <td align="center"><?php echo $no; ?></td>
                              <td align="center"><img src="../img/<?php echo $skyrowcart['Gambar_Produk']; ?>" width="50px" height="50px"></td>
                              <td><?php echo $skyrowcart['Nama_Produk']; ?></td>
                              <td><?php echo $skyrowcart['Kategori']; ?></td>
                              <td align="center"><?php echo $skyrowcart['Ukuran']; ?></td>
                              <td><?php echo $skyrowcart['Bahan']; ?></td>
                              <td><?php echo $skyrowcart['Model']; ?></td>
                              <td><?php echo $skyrowcart['Kualitas']; ?></td>
                              <td align="center"><?php echo $skyrowcart['Jumlah']; ?></td>
                              <td align="right"><?php echo"Rp.".number_format($skyrowcart['Harga'],0,',','.'); ?></td>
                              <td align="right"><?php echo "Rp.".number_format($total=($skyrowcart['Jumlah']*$skyrowcart['Harga']),0,',','.'); ?></td>
                              <td align="center"><a href=""><span class="glyphicon glyphicon-trash"></span></a>&nbsp;&nbsp;  &nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-pencil"></span></a></td>
                          </tr>
                          <?php
                              $no++;
                          }
                              ?>
                          <tr align="center" bgcolor="#f8f8f8" style="border-top:solid 1px lightgray;height:50px;">
                              <td colspan="8">TOTAL BAYAR</td>
                              <td>
                                  <?php
    $sqltotjum = mysql_query("select sum(jumlah) as totjum from cart where User='$user'");
    $totjum = mysql_fetch_array($sqltotjum);
    echo $totjum['totjum'];
    ?>
                              </td>
                              <td colspan="2"><?php
    $total2=0;
    $totbayar=0;
     $skysqlcart2 = mysql_query("select a.ID_Produk, a.Nama_Produk, a.Gambar_Produk, a.Kategori, a.Ukuran, a.Warna, a.Stok, a.Harga, a.Supplier, a.Bahan, a.Model, a.Kualitas, b.ID_Keranjang, b.ID_Produk, b.ID_Session, b.Jumlah, b.User from produk a inner join cart b on a.ID_Produk=b.ID_Produk where User='$user'");
while ($skyrowcart2 = mysql_fetch_array($skysqlcart2)){
    $total2=($skyrowcart2['Jumlah'] * $skyrowcart2['Harga']);
    $totbayar= $totbayar + $total2;
        
}
    ?>
                                  <?php
    echo"Rp.".number_format($totbayar,0,',','.');
    ?>
    </td>
                          </tr>
                      </table>
                  </div>
              </div>
          </div>
        </div>  
        <footer>
            <div class="footer-atas">
                <div class="shadow-footer">
                    <div class="in-shadow-footer" id="in-satu">
                        <div class="in-shadow">
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
                            <img src="../img/logo-sponsor/log.png">
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