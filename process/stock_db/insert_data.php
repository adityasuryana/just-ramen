<?php
    require_once('../../config.php');

    $nama_bahan = $_POST['nama_bahan'];
    $jumlah = $_POST['jumlah'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO stok(nama_bahan,jumlah,deskripsi) VALUES ('$nama_bahan','$jumlah','$deskripsi')";
    $result = $conn->query($sql);

    if ($result) {
        header("location:../../stock.php");
    }
    else{
        echo "Failed". mysqli_error($conn);
    }
?>
