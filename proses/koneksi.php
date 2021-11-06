<?php
$rnpname = "root";
$rnppass = "satusampe250599";
$rnpserver = "localhost";
$rnpdbase = "2016_web_native_skyler";
$rnpkoneksi = mysql_connect($rnpserver,$rnpname,$rnppass) or die ("Kesalahan Koneksi");
$rnpconn = mysql_select_db($rnpdbase,$rnpkoneksi) or die ("Database Error");
?>