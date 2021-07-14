<?php
//Koneksi ke database ("" merupakan password phpmyadmin)
$koneksi = mysqli_connect("localhost", "ucp2pkw_hasnashabrina", "201900140056", "ucp2pkw_tokobukushabr");

//Cek koneksi ke database
//apabila error
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}