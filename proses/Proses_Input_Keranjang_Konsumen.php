<?php
session_start();
include "koneksi.php";
$id     = $_GET['ID'];
$user   = $_SESSION['user_konsumen'];
$sesid  = session_id();

	
	$rnpquery = mysql_query("SELECT * FROM cart WHERE ID_Produk='$id' AND ID_Session='$sesid'");
	$jumlah = mysql_num_rows($rnpquery);
	if ($jumlah == 0){
		mysql_query("INSERT INTO cart (ID_Produk, ID_Session,Jumlah, User) VALUES ('$id','$sesid','1','$user')");
	}
	else {
		mysql_query("UPDATE cart SET Jumlah = Jumlah + 1 WHERE ID_session = '$sesid' AND ID_Produk='$id'");}
if ($rnpquery){ ?>
<script language="JavaScript">
document.location='../form/Form_Keranjang_Konsumen.php'</script>
<?php	
}
?>