<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | just ramen</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  	<!-- CSS -->
  	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  	<link rel="stylesheet" href="css/bootstrap.css">
  	<link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light py-4">
      <div class="container">
        <a class="navbar-brand mx-auto" href="index.php">just ramen</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item me-3">
              <a class="nav-link" href="menu-ramen.php">Menu</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="promo.php">Promo</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="order.php">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <h1 class="promo-title my-4">Menu</h1>
      <div class="row">
        <?php
      		include 'config.php';
      		$menu = ("select * from menu order by id asc");

          $dewan1 = $conn->prepare($menu);
          $dewan1->execute();
          $res1 = $dewan1->get_result();
            while ($row = $res1->fetch_assoc()) {
              $id = $row["id"];
              $menu = $row["menu"];
              $harga = number_format($row["harga"],2,',','.');
              $deskripsi = $row["deskripsi"];

      	?>
        <div class="col-xl-3 col-md-4 col-sm-6 col-xs-12 py-2">
          <div class="card h-100 py-4">
            <img class="menu-img w-100" src="assets/img/menu/<?php echo $row['img_menu']; ?>">
            <div class="text-center mt-3">
              <h5 class="menu-title mb-1"><?php echo $menu; ?></h5>
            </div>

            <div class="mt-3">
              <p class="menu-desc" style="text-align: justify;"><?php echo $deskripsi; ?></p>

              <p class="price mb-0 mt-3">IDR <?php echo $harga; ?></p>

            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <script src="js/jquery.js"></script>
  	<script src="js/bootstrap.js" charset="utf-8"></script>
  	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  	<script src="js/script.js"></script>
  </body>
</html>
