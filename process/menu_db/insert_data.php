<?php
    require_once('../../config.php');

    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO menu(menu,harga,deskripsi) VALUES ('$menu','$harga','$deskripsi')";
    $result = $conn->query($sql);

    if ($result) {
        header("location:../../menu.php");
    }
    else{
        echo "Failed". mysqli_error($conn);
    }

?>
