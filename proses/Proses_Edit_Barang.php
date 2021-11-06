<?php
session_start();
if (isset ($_SESSION['user'])){
?>
<?php
include "koneksi.php";
$skyid = $_POST['ID'];
$skynama = $_POST['Nama'];
$skygambar = $_POST['file'];
$skyukuran = $_POST['Ukuran'];
$skywarna = $_POST['Warna'];
$skystock = $_POST['Stock'];
$skyharga = $_POST['Harga'];
$rnpquery = mysql_query ("UPDATE tshirt SET Nama_Tshirt='$skynama', Gambar_Tshirt='$skygambar', Ukuran='$skyukuran', Warna='$skywarna', Stok='$skystock'  WHERE ID_Tshirt='$skyid' ")or die (mysql_error());
    
if($rnpquery){
?>
<script language="JavaScript">
document.location='../form/Form_PengaturanBarang_Supplier.php'</script>
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