<?php 
	$host = "localhost";
	$user = "ucp2pkw_hasnashabrina";
	$pass = "20190140056";
	$db = "ucp2pkw_tokobukushabr";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) {
		die("Koneksi gagal : ".mysql_connect_error());
	}
?>