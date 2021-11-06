<?php
include "koneksi.php";
$rnpid = $_GET['IDJ'];
$rnpquery = "DELETE FROM jeans WHERE ID_Jeans = '$rnpid';";
mysql_query($rnpquery);
if ($rnpquery) { ?>
<script language="JavaScript">
document.location='../form/Form_PengaturanBarang_Supplier.php'</script>
<?php
}
?>