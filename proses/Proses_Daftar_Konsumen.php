<?php
include "koneksi.php";

$skynama = $_POST['nama'];
$skyjenkel = $_POST['jenkel'];
$skykota = $_POST['kota'];
$skyalamat = $_POST['alamat'];
$skyemail = $_POST['email'];
$skyusername = $_POST['username'];
$skypassword = $_POST['password'];

$rnpquerysave = mysql_query("INSERT INTO user_konsumen (Nama_Konsumen,Jenis_Kelamin,Kota,Alamat,Email,Username,Password,Jenis) VALUES ('$skynama','$skyjenkel','$skykota','$skyalamat','$skyemail','$skyusername','$skypassword','Pembeli')");

if($rnpquerysave){
    echo "Selamat, Anda Berhasil Registrasi. Silhkan Login Untuk Melanjutkan";
}
?><br>
<a href="../index.php">Back</a>