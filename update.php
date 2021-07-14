<?php

include 'config.php';

$id = $_POST['id'];
$nama_buku = $_POST['nama_buku'];
$kategori_buku = $_POST['kategori_buku'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];

mysqli_query($koneksi, "update listbuku set nama_buku='$nama_buku', kategori_buku='$kategori_buku', penerbit='$penerbit', harga='$harga', diskon='$diskon' where id='$id'");

header("location:home.php");