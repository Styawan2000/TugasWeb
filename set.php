<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'Praktikum_web';

$connect = mysqli_connect($host, $user, $pass,$db);

if (!$connect) {
    echo 'gagal membuat koneksi =>' . mysqli_connect_error();
}
?>