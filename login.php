<?php

session_start();

// koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"select * from admin where nama='$username' and kata_sandi='$password'");

// menghitung jumlah data
$cek = mysqli_num_rows($data);

if($cek > 0){ 
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:tampilkontak.php");
}else{ //jika tidak tampilkan halaman index.php
	header("location:index.php");
}
?>
