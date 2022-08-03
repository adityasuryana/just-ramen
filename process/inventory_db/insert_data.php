<?php
    require_once('../../config.php');

    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO inventory(nama_barang,jumlah,deskripsi) VALUES ('$nama_barang','$jumlah','$deskripsi')";
    $result = $conn->query($sql);

    if ($result) {
        header("location:../../inventory.php");
    }
    else{
        echo "Failed". mysqli_error($conn);
    }

?>
