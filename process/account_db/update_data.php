<?php

    require_once('../../config.php');

    $id = $_POST['id'];

    $username = $_POST['username'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $query = "UPDATE users SET username='$username' ,email='$email', password='$password' WHERE id='$id'";

    $result = mysqli_query($conn,$query);

    if($result == true){
        header("location:../../account.php");
    }

?>
