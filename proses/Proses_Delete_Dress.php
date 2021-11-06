<?php
include "koneksi.php";
$rnpid = $_GET['IDD'];
$rnpquery = "DELETE FROM dress WHERE ID_Dress = '$rnpid';";
mysql_query($rnpquery);
if ($rnpquery) { ?>
<script language="JavaScript">
document.location='../form/Form_PengaturanBarang_Supplier.php'</script>
<?php
}
?>