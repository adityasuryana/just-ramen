<?php

    require_once('../../config.php');

    $id_promo = $_GET['id_promo'];

    $query = "DELETE FROM promo WHERE id_promo = '$id_promo'";

    $result = mysqli_query($conn, $query);

    if($result == true){
        header("location:../../promo-dashboard.php");
    }

?>
