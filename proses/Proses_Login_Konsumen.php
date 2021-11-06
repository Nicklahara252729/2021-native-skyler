<?php
session_start();
?>
<?php
include("../proses/koneksi.php");
$rnpsql="SELECT * FROM user_konsumen ";
$rnpsql.="WHERE Username = '".$_POST['user']."' ";
$rnpsql.="AND Password = '".$_POST['pass']."' ";
$rnphasil = mysql_query($rnpsql) or exit("Error query :<b>".$rnpsql."</b>.");
if(mysql_num_rows($rnphasil)>0){
$rnpdata = mysql_fetch_array($rnphasil);
$_SESSION['user_konsumen'] = $rnpdata['Username'];
$_SESSION['pass_konsumen'] = $rnpdata['Password'];
$_SESSION['jenkel'] = $rnpdata['Jenis_Kelamin'];
$_SESSION['kota'] = $rnpdata['Kota'];
$_SESSION['alamat'] = $rnpdata['Alamat'];
$_SESSION['email'] = $rnpdata['Email'];
$_SESSION['jenis'] = $rnpdata['Jenis'];
$_SESSION['nama'] = $rnpdata['Nama_Konsumen'];
header("Location:../form/Form_Konsumen.php");
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