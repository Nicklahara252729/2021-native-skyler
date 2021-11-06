<?php
session_start();
?>
<?php
include("../proses/koneksi.php");
$rnpsql="SELECT username,password FROM user_supplier ";
$rnpsql.="WHERE username = '".$_POST['user']."' ";
$rnpsql.="AND password = '".$_POST['pass']."' ";
$rnphasil = mysql_query($rnpsql) or exit("Error query :<b>".$rnpsql."</b>.");
if(mysql_num_rows($rnphasil)>0){
$rnpdata = mysql_fetch_array($rnphasil);
$_SESSION['user_supplier'] = $rnpdata['username'];
$_SESSION['pass_supplier'] = $rnpdata['password'];
header("Location:../form/Form_Supplier.php");
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