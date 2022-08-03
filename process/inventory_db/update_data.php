<?php

    require_once('../../config.php');

    $id = $_POST['id'];

    $nama_barang = $_POST['nama_barang'];

    $jumlah = $_POST['jumlah'];

    $deskripsi = $_POST['deskripsi'];

    $query = "UPDATE inventory SET nama_barang='$nama_barang' ,jumlah='$jumlah', deskripsi='$deskripsi' WHERE id='$id'";

    $result = mysqli_query($conn,$query);

    if($result == true){
        header("location:../../inventory.php");
    }

?>
