<?php

    require_once('../../config.php');

    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id='$id'";

    $result = mysqli_query($conn,$query);

    if($result == true){
        header("location:../../account.php");
    }

?>
