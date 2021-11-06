<?php
include "koneksi.php";
$rnpid = $_GET['ID'];
$rnpquery = "DELETE FROM tshirt WHERE ID_Tshirt = '$rnpid';";
mysql_query($rnpquery);
if ($rnpquery) { ?>
<script language="JavaScript">
document.location='../form/Form_PengaturanBarang_Supplier.php'</script>
<?php
}
?>