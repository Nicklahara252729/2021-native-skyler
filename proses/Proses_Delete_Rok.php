<?php
include "koneksi.php";
$rnpid = $_GET['IDR'];
$rnpquery = "DELETE FROM rok WHERE ID_Rok = '$rnpid';";
mysql_query($rnpquery);
if ($rnpquery) { ?>
<script language="JavaScript">
document.location='../form/Form_PengaturanBarang_Supplier.php'</script>
<?php
}
?>