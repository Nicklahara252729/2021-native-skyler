<?php
session_start();
include "koneksi.php";
$skyproduk = $_POST['Produk'];
$skyjumlah = $_POST['Jumlah'];
$skyharga = $_POST['Harga'];
$skynama = $_POST['Nama'];
$skyalamat = $_POST['Alamat'];
$skypos = $_POST['Kode'];
$skyemail = $_POST['Email'];
$skyhp = $_POST['HP'];
$skypembeli = $_SESSION['user_konsumen'];
$skysupplier = $_GET['Supp'];
$skyid = $_GET['ID'];
$skytotal = $skyjumlah + $skyharga ;
$skycount = count($skyproduk);
for ($i=0; $i <= $skycount; $i++) { 
	$skyquery1 = mysql_query("INSERT INTO transaksi (Nama_Produk,Jumlah,Harga,Total,Nama,Alamat,Kode_Pos,Email,No_HP,Pembeli,Supplier,Status) VALUES ('$skyproduk[$i]','$skyjumlah[$i]','$skyharga[$i]','$skytotal[$i]','$skynama[$i]','$skyalamat[$i]','$skypos[$i]','$skyemail[$i]','$skyhp[$i]','$skypembeli','$skysupplier','Belum Terkirim')");
}
$skyquery2 = mysql_query("UPDATE produk SET Stok = Stok - '$skyjumlah[$i]' WHERE ID_Produk='$skyid' ");


if ($skyquery1){
if ($skyquery2){
	echo "Terima Kasih Telah Membeli. Pesanan Anda Akan Segera Datang";
}

}
;?><br>
<a href="../form/Form_Konsumen.php">Kembali</a>