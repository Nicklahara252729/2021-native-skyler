<?php
include "koneksi.php";
$skyid = $_GET['ID'];
$skyquery = mysql_query("DELETE FROM transaksi WHERE ID_Transaksi='$skyid'");
if ($skyquery){
	echo "Transaksi Telah Dihapus";
}
;?><br>
<a href="../form/Form_Laporan_Supplier.php">Kembali</a>
