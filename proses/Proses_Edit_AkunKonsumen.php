<?php
session_start();
if (isset ($_SESSION['user_konsumen'])){
?>
<?php
include "koneksi.php";
$skyid = $_POST['ID'];
$skynama = $_POST['Nama'];
$skyjenkel = $_POST['Jenkel'];
$skykota = $_POST['Kota'];
$skyalamat = $_POST['Alamat'];
$skyemail = $_POST['Email'];
$skyusername = $_POST['Username'];
$skypassword = $_POST['Password'];

$rnpquery = mysql_query ("UPDATE user_konsumen SET Nama_Konsumen='$skynama', Jenis_Kelamin='$skyjenkel', Kota='$skykota', Alamat='$skyalamat', Email='$skyemail', Username='$skyusername', Password='$skypassword' WHERE ID_Konsumen='$skyid' ")or die (mysql_error());

if($rnpquery){
?>
<script language="JavaScript">
document.location='../form/Form_PengaturanAkun_Konsumen.php'</script>
<?php
}
?>
<?php
} else { ?>
<h2>Sorry..</h2>
<p>
Anda tidak berhak mengakses halaman ini.
Silahkan <a href="../index.php">login</a> terlebih dahulu.
</p>
<?php
}
?>