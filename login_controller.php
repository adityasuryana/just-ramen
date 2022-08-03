<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data user dengan email dan password yang sesuai
$result = mysqli_query($conn,"SELECT * FROM users where email='$email' and password='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['email'] = $email;
	$_SESSION['username'] = $data['username'];
	$_SESSION['status'] = "sudah_login";
	$_SESSION['id'] = $data['id'];
	header("location:dashboard.php");
} else {
	header("location:login.php");
}
?>