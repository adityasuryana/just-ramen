<?php

    require_once('../../config.php');

    $id = $_POST['id'];
    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $img_menu = $_FILES['img_menu']['name'];

    if($img_menu != "") {
      $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload
      $x = explode('.', $img_menu); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensi = strtolower(end($x));
      $file_tmp = $_FILES['img_menu']['tmp_name'];
      $angka_acak     = rand(1,999);
      $nama_gambar_baru = $angka_acak.'-'.$img_menu; //menggabungkan angka acak dengan nama file sebenarnya
      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                    move_uploaded_file($file_tmp, '../../assets/img/menu/'.$nama_gambar_baru); //memindah file gambar ke folder gambar

                      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                     $query  = "UPDATE menu SET menu = '$menu', harga = '$harga', deskripsi = '$deskripsi', img_menu = '$nama_gambar_baru'";
                     $query .= "WHERE id = '$id'";
                     $result = mysqli_query($conn, $query);
                     // periska query apakah ada error
                     if(!$result){
                         die ("Query gagal dijalankan: ".mysqli_errno($conn).
                              " - ".mysqli_error($conn));
                     } else {
                       //tampil alert dan akan redirect ke halaman index.php
                       echo "<script>window.location='../../menu.php';</script>";
                     }
                } else {
                 //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../../menu.php';</script>";
                }
      } else {
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $query  = "UPDATE menu SET menu = '$menu', harga = '$harga', deskripsi = '$deskripsi'";
        $query .= "WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        // periska query apakah ada error
        if(!$result){
              die ("Query gagal dijalankan: ".mysqli_errno($conn).
                               " - ".mysqli_error($conn));
        } else {
          //tampil alert dan akan redirect ke halaman index.php
            echo "<script>window.location='../../menu.php';</script>";
        }
      }

?>
