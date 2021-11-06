<?php
include "koneksi.php";
$rnpid = $_GET['IDB'];
$rnpquery = "DELETE FROM baby WHERE ID_Baby = '$rnpid';";
mysql_query($rnpquery);
if ($rnpquery) { ?>
<script language="JavaScript">
document.location='../form/Form_PengaturanBarang_Supplier.php'</script>
<?php
}
?>