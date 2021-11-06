<?php
include "koneksi.php";
$rnpid = $_GET['IDM'];
$rnpquery = "DELETE FROM muslim WHERE ID_Muslim = '$rnpid';";
mysql_query($rnpquery);
if ($rnpquery) { ?>
<script language="JavaScript">
document.location='../form/Form_PengaturanBarang_Supplier.php'</script>
<?php
}
?>