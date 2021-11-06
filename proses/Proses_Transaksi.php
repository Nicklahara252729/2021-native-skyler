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
$skytotal = $skyjumlah*$skyharga;
$skypembeli = $_SESSION['user_konsumen'];
$skysupplier = $_GET['Supp'];
$skyid = $_GET['ID'];
$skyquery = mysql_query("INSERT INTO transaksi (Nama_Produk,Jumlah,Harga,Total,Nama,Alamat,Kode_Pos,Email,No_HP,Pembeli,Supplier,Status) VALUES ('$skyproduk','$skyjumlah','$skyharga','$skytotal','$skynama','$skyalamat','$skypos','$skyemail','$skyhp','$skypembeli','$skysupplier','Belum Terkirim')");
$skyquery2 = mysql_query("UPDATE produk SET Stok = Stok - '$skyjumlah' WHERE ID_Produk='$skyid' ");
if ($skyquery){
if ($skyquery2){
	echo "Terima Kasih Telah Membeli. Pesanan Anda Akan Segera Datang";
}
}
;?><br>
<a href="../form/Form_Konsumen.php">Kembali</a>