<?php
session_start();
include "koneksi.php";
$akun = $_SESSION['user_supplier'];
$input = $_GET['Input'];
$sid = $_GET['IDT'];
$nama = $_GET['Nama'];
$harga = $_GET['Harga'];
$sesid = session_id();

if($input == 'Add'){
	
	$rnpquery = mysql_query("SELECT ID_Keranjang FROM cart WHERE ID_Keranjang='$sid' AND ID_Session='$sesid'");
	$jumlah = mysql_num_rows($rnpquery);
	if ($jumlah == 0){
		mysql_query("INSERT INTO cart (ID_Keranjang, ID_Session, Nama_Barang, Harga, Jumlah, Supplier) VALUES ('$sid','$sesid','$nama','$harga','1','$akun')");
	}
	else {
		mysql_query("UPDATE cart SET Jumlah = Jumlah + 1 WHERE ID_session = '$sesid' AND ID_Keranjang='$sid'");}
if ($rnpquery){ ?>
<script language="JavaScript">
document.location='../form/Form_Keranjang.php'</script>
<?php	
}}
?>