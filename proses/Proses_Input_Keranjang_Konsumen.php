<?php
session_start();
include "koneksi.php";
$akun = $_GET['Supp'];
$input = $_GET['Input'];
$id = $_GET['ID'];
$nama = $_GET['Nama'];
$harga = $_GET['Harga'];
$sesid = session_id();

if($input == 'Add'){
	
	$rnpquery = mysql_query("SELECT ID_Produk FROM cart WHERE ID_Produk='$id' AND ID_Session='$sesid'");
	$jumlah = mysql_num_rows($rnpquery);
	if ($jumlah == 0){
		mysql_query("INSERT INTO cart (ID_Produk, ID_Session, Nama_Produk, Harga, Jumlah, Supplier) VALUES ('$id','$sesid','$nama','$harga','1','$akun')");
	}
	else {
		mysql_query("UPDATE cart SET Jumlah = Jumlah + 1 WHERE ID_session = '$sesid' AND ID_Produk='$id'");}
if ($rnpquery){ ?>
<script language="JavaScript">
document.location='../form/Form_Keranjang_Konsumen.php'</script>
<?php	
}}
?>