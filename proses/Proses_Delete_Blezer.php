<?php
include "koneksi.php";
$rnpid = $_GET['IDBL'];
$rnpquery = "DELETE FROM blezer WHERE ID_blezer = '$rnpid';";
mysql_query($rnpquery);
if ($rnpquery) { ?>
<script language="JavaScript">
document.location='../form/Form_PengaturanBarang_Supplier.php'</script>
<?php
}
?>