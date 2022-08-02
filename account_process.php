<?php
  require 'config.php';

  if($_GET['act']== 'addAccount'){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //query
    $queryadd =  mysqli_query($conn, "INSERT INTO users VALUES('$id' , '$username' , '$email', '$password')");

    if ($queryadd) {
        # code redicet setelah insert ke index
        header("location:account.php");
    }
    else{
        echo "Failed". mysqli_error($conn);
    }

} elseif ($_GET['act'] == 'deleteAccount'){
    $id = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($conn, "DELETE FROM users WHERE id = '$id'");

    if ($querydelete) {
        # redirect ke index.php
        header("location: account.php");
    }
    else{
        echo "Failed". mysqli_error($conn);
    }

    mysqli_close($conn);

} elseif($_GET['act']=='editAccount'){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //query update
    $queryupdate = mysqli_query($conn, "UPDATE users SET username='$username' , email='$email', password='$password' WHERE id = '$id' ");

    if ($queryupdate) {
        # credirect ke page index
        header("location:account.php");
    }
    else{
        echo "Failed". mysqli_error($conn);
    }
}

 ?>
