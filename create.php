<?php
//Include koneksi database
include './config.php';

//Menangkap data yang dikirim dari form
$nama_buku = $_POST['nama_buku'];
$kategori_buku = $_POST['kategori_buku'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];

//Menginput data ke database
$result = mysqli_query($koneksi, "INSERT INTO listbuku VALUES(0,'$nama_buku', '$kategori_buku', '$penerbit', '$harga', '$diskon')");
    if($result){
        header("location:./home.php");
    }else {
        echo $koneksi->error; 
    }
?>