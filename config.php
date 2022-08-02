<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "just_ramendb";

$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn){
    die("<script>alert('Gagal Tersambung dengan Database.')</script>");

}
?>
