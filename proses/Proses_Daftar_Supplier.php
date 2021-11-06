<?php
include "koneksi.php";

$skynama = $_POST['nama'];
$skyalamat = $_POST['alamat'];
$skykodepos = $_POST['kodepos'];
$skyemail = $_POST['email'];
$skyusername = $_POST['username'];
$skypassword = $_POST['password'];

$rnpquerysave = mysql_query("INSERT INTO user_supplier (Nama_Lengkap,Alamat,Kode_Pos,Email,Username,Password,Jenis) VALUES ('$skynama','$skyalamat','$skykodepos','$skyemail','$skyusername','$skypassword','Supplier')");

if($rnpquerysave){
    echo "Selamat, Anda Berhasil Registrasi. Silhkan Login Untuk Melanjutkan";
}
?><br>
<a href="../index.php">Back</a>