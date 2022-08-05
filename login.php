<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/icon/favicon.png">
    <title>Login | just ramen</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

   <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand mx-auto" href="index.php">just ramen</a>
      </div>
    </nav>

    <div class="container mt-5">
      <div class="row">
        <div class="col">
          <div class="position-absolute top-50 start-50 translate-middle">
            <div class="form-container">
              <form action="login_controller.php" method="post">
                <h3>Login</h3>
                <p>This is a secure system and you will need to provide
                your login details to access the site.
                </p>

                <div class="mt-4">
                  <input class="w-100" type="email" name="email" placeholder="email" required>
                  <input class="w-100" type="password" name="password" placeholder="password" required>
                </div>

                <div class="d-flex justify-content-end mt-3">
                  <input class="form-btn mb-0" type="submit" name="submit" value="Login" >
                </div>
              </form>
            </div>

            <div class="mt-3">
              <a class="nav-link d-inline-flex" href="index.php"><img class="me-3" src="assets/icon/left-arrow.svg" alt="">Home</a>
            </div>
           </div>
        </div>
      </div>
    </div>

</body>
</html>
