<?php
session_start();
if (isset ($_SESSION['user_supplier'])){
?>
<?php
include "koneksi.php";
$skyid = $_POST['ID'];
$skynama = $_POST['Nama'];
$skyalamat = $_POST['Alamat'];
$skykodepos = $_POST['Kodepos'];
$skyemail = $_POST['Email'];
$skyusername = $_POST['Username'];
$skypassword = $_POST['Password'];

$rnpquery = mysql_query ("UPDATE user_supplier SET Nama_Supplier='$skynama', Alamat='$skyalamat', Kode_Pos='$skykodepos', Email='$skyemail', Username='$skyusername', Password='$skypassword' WHERE ID_Supplier='$skyid' ")or die (mysql_error());

if($rnpquery){
?>
<script language="JavaScript">
document.location='../form/Form_PengaturanAkun_Supplier.php'</script>
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