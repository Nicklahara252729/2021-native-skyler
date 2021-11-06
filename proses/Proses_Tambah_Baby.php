<?php
include "koneksi.php";
session_start();
$akun = $_SESSION['user_supplier'];
$time = time();
$nama = $_POST['Nama'];
$ukuran = $_POST['Ukuran'];
$warna = $_POST['Warna'];
$stock = $_POST['Stock'];
$harga = $_POST['Harga'];
$gambar = $_FILES['file']['name'];
$namafile = "../uploaded/".$gambar;
$asal = $_FILES['file']['tmp_name'];
if(isset($_POST['submit'])){
    if(file_exists($namafile)){
        $namafile = str_replace(".jpg","",$namafile);  
        $namafile = $namafile . "_" .$time .".jpg";
    }
$rnpquerymove = move_uploaded_file($asal, $namafile);
$rnpquerysave = mysql_query("INSERT INTO produk (Nama_Produk,Gambar_Produk,Kategori,Ukuran,Warna,Stok,Harga,Supplier) VALUES ('$nama','$gambar','Baby','$ukuran','$warna','$stock','$harga','$akun')");
    if($rnpquerysave){
    if($rnpquerymove){
    echo "Barang Sudah Ditambahkan";
}
}
}
?><br>
<a href="../form/Form_PengaturanBarang_Supplier.php">Back</a>