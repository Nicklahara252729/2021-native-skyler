<?php
$rnpname = "root";
$rnppass = "";
$rnpserver = "localhost";
$rnpdbase = "skyler";
$rnpkoneksi = mysql_connect($rnpserver,$rnpname,$rnppass) or die ("Kesalahan Koneksi");
$rnpconn = mysql_select_db($rnpdbase,$rnpkoneksi) or die ("Database Error");
?>