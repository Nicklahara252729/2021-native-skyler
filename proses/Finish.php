<?php
include "koneksi.php";
$skyquery = mysql_query("UPDATE transaksi SET Status = 'Terkirim'");
if ($skyquery) { ?>
<script language="JavaScript">
document.location='../form/Form_Laporan_Supplier.php'</script>
<?php
}
?>