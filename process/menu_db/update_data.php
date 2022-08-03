<?php

    require_once('../../config.php');

    $id = $_POST['id'];

    $menu = $_POST['menu'];

    $harga = $_POST['harga'];

    $deskripsi = $_POST['deskripsi'];

    $query = "UPDATE menu SET menu='$menu' ,harga='$harga', deskripsi='$deskripsi' WHERE id='$id'";

    $result = mysqli_query($conn,$query);

    if($result == true){
        header("location:../../menu.php");
    }

?>
