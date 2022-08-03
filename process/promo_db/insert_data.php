<?php
    require_once('../../config.php');

    $title_promo = $_POST['title_promo'];
    $desc_promo = $_POST['desc_promo'];
    $img_promo = $_FILES['img_promo']['name'];

    if($img_promo != "") {
      $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload
      $x = explode('.', $img_promo); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensi = strtolower(end($x));
      $file_tmp = $_FILES['img_promo']['tmp_name'];
      $angka_acak     = rand(1,999);
      $nama_gambar_baru = $angka_acak.'-'.$img_promo; //menggabungkan angka acak dengan nama file sebenarnya
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                    move_uploaded_file($file_tmp, '../../assets/img/promo/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                      $sql = "INSERT INTO promo (title_promo, desc_promo, img_promo) VALUES ('$title_promo','$desc_promo','$nama_gambar_baru')";
                      $result = $conn->query($sql);
                      // periska query apakah ada error
                      if ($result) {
                          header("location:../../promo-dashboard.php");
                      }
                      else{
                          echo "Failed". mysqli_error($conn);
                      }

                } else {
                 //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../../promo-dashboard.php';</script>";
                }
    } else {
          $sql = "INSERT INTO promo (title_promo, desc_promo, img_promo) VALUES ('$title_promo','$desc_promo', null)";
          $result = $conn->query($sql);
                      // periska query apakah ada error
                      if ($result) {
                          header("location:../../promo-dashboard.php");
                      }
                      else{
                          echo "Failed". mysqli_error($conn);
                      }
    }

?>
