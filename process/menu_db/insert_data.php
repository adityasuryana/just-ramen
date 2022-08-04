<?php
    require_once('../../config.php');

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
                      // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                      $sql = "INSERT INTO menu (menu, harga, deskripsi, img_menu) VALUES ('$menu','$harga', '$deskripsi', '$nama_gambar_baru')";
                      $result = $conn->query($sql);
                      // periska query apakah ada error
                      if ($result) {
                          header("location:../../menu.php");
                      }
                      else{
                          echo "Failed". mysqli_error($conn);
                      }

                } else {
                 //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../../menu.php';</script>";
                }
    } else {
          $sql = "INSERT INTO menu (menu, harga, deskripsi, img_menu) VALUES ('$menu','$harga', '$deskripsi', null)";
          $result = $conn->query($sql);
                      // periska query apakah ada error
                      if ($result) {
                          header("location:../../menu.php");
                      }
                      else{
                          echo "Failed". mysqli_error($conn);
                      }
    }

?>
