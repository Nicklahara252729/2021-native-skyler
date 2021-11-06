<?php
include "koneksi.php";
$rnpid = $_GET['ID'];
$rnpquery = mysql_query ("DELETE FROM cart WHERE ID_Keranjang = '$rnpid'");
if ($rnpquery) { ?>
<script language="JavaScript">
document.location='../form/Form_Keranjang.php'</script>
<?php
}
?>