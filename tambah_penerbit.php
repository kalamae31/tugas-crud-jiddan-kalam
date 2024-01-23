<?php
    include "koneksi.php";
    // menangkap data yang di kirim dari form
    $ID_Penerbit = $_POST['ID_Penerbit'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Kota = $_POST['Kota'];
    $telpon = $_POST['Telepon'];
    // menginput data ke database
    $query = "INSERT INTO tb_agenpenerbit VALUES ('$ID_Penerbit','$Nama','$Alamat','$Kota','$Telepon')";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
    echo "<script>alert('penerbit berhasil ditambahkan');location='pengadaan.php';</script>";
    }
?>