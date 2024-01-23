<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id_buku = $_POST['ID_Buku'];
$Kategori = $_POST['Kategori'];
$Nama_Buku = $_POST['Nama_Buku'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];
$Penerbit = $_POST['Penerbit'];

// update data ke database
mysqli_query($koneksi,"update tb_agen set Kategori='$Kategori',
Nama_Buku='$Nama_Buku', Harga='$Harga', Stok='$Stok', Penerbit='$Penerbit'  where ID_Buku='$ID_Buku'");
// mengalihkan halaman kembali ke index.php
header("location:admin.php");

?>