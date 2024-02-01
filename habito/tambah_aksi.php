<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into user VALUES('','$name','$password','$email')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>