<?php
session_start();
if (isset ($_SESSION['user_supplier'])){
?>
<?php
include "koneksi.php";
$skyid = $_POST['ID'];
$time = time();
$skynama = $_POST['Nama'];
$skyukuran = $_POST['Ukuran'];
$skywarna = $_POST['Warna'];
$skystock = $_POST['Stock'];
$skyharga = $_POST['Harga'];
$gambar = $_FILES['file']['name'];
$namafile = "../uploaded/".$gambar;
$asal = $_FILES['file']['tmp_name'];
$namafile = str_replace(".jpg","",$namafile);  
$namafile = $namafile . "_" .$time .".jpg";
$rnpquerymove = move_uploaded_file($asal, $namafile);
$rnpquery = mysql_query ("UPDATE jeans SET Nama_Jeans='$skynama', Gambar_Jeans='$gambar', Ukuran='$skyukuran', Warna='$skywarna', Stok='$skystock', Harga='$skyharga'  WHERE ID_Jeans='$skyid' ")or die (mysql_error());

if($rnpquery){
if($rnpquerymove){
if(file_exists($namafile)){
?>
<script language="JavaScript">
document.location='../form/Form_PengaturanBarang_Supplier.php'</script>
<?php
}}}
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