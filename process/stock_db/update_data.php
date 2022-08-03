<?php

    require_once('../../config.php');

    $id = $_POST['id'];

    $nama_bahan = $_POST['nama_bahan'];

    $jumlah = $_POST['jumlah'];

    $deskripsi = $_POST['deskripsi'];

    $query = "UPDATE stok SET nama_bahan='$nama_bahan' ,jumlah='$jumlah', deskripsi='$deskripsi' WHERE id='$id'";

    $result = mysqli_query($conn,$query);

    if($result == true){
        header("location:../../stock.php");
    }

?>
