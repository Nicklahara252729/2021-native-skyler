<<?php
session_start();
?>
<?php
include("koneksi.php");
$rnpsql="SELECT username,password FROM tb_supplier ";
$rnpsql.="WHERE username = '".$_POST['UserSupplier']."' ";
$rnpsql.="AND password = '".$_POST['PassSupplier']."' ";
$rnphasil = mysql_query($rnpsql) or exit("Error query :<b>".$rnpsql."</b>.");
if(mysql_num_rows($rnphasil)>0){
$rnpdata = mysql_fetch_array($rnphasil);
$_SESSION['user'] = $rnpdata['username'];
$_SESSION['pass'] = $rnpdata['password'];
header("Location:../form/form-supplier.php");
exit();
} else { ?>
<h2>Sorry</h2>
<p>
Username dan Password Salah.
Klik <a href="../index.php">Disini</a>Untuk Kembali Login.
</p>
<?php
} 
?>