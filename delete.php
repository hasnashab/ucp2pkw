<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from listbuku where id='$id'");

header("location:index.php");