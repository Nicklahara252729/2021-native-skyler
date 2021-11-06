<?php
include "koneksi.php";
$rnpid = $_GET['IDK'];
$rnpquery = "DELETE FROM kemeja WHERE ID_Kemeja = '$rnpid';";
mysql_query($rnpquery);
if ($rnpquery) { ?>
<script language="JavaScript">
document.location='../form/Form_PengaturanBarang_Supplier.php'</script>
<?php
}
?>