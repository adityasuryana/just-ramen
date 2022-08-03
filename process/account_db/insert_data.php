<?php
    require_once('../../config.php');

    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
    $result = $conn->query($sql);
    //query

    if ($result) {
        header("location:../../account.php");
    }
    else{
        echo "Failed". mysqli_error($conn);
    }

?>
