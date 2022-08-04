<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>just ramen</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="splide/css/splide.min.css">
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
      <div class="row align-items-center">
        <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-8 col-sm-12">
          <div class="header mt-5">
            <div class="header-text">
              <h1 class="">Enjoy hot and freshly made ramen at just ramen</h1>
              <p class="w-75">Taste the best foods of japan, we deliver authentic and delicious ramen in Indonesia</p>
            </div>

            <div class="header-link">
              <a class="want-ramen" href="#">i want ramen!<img class="ms-3" src="assets/icon/left-rounded-arrow.svg" alt=""></a>
            </div>
          </div>
        </div>

        <div class="col-1 d-none d-xxl-block"></div>

        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4 d-none d-sm-none d-md-block d-lg-block">
          <div class="mt-4">
            <!-- <img class="z-index-min position-absolute" src="assets/icon/blob-right.svg" alt=""> -->
            <img class="header-img" src="assets/img/ramen-head.svg" alt="">
          </div>
        </div>
      </div>

      <div class="row align-items-center mt-5">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
          <div class="card lil-card">
            <span class="mb-3"><img class="" src="assets/icon/clock-rounded.svg" alt=""></span>
            <p class="title">10:00 am - 8.00 pm</p>
            <p class="sub-title mb-0">Monday to Sunday</p>
          </div>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
          <div class="card lil-card">
            <span class="mb-3"><img class="" src="assets/icon/location-rounded.svg" alt=""></span>
            <p class="title">Bahureksa 10, Bandung</p>
            <a class="sub-title" href="https://www.google.com/maps/@-6.9052821,107.6142762,20.3z" target="_blank" style="text-decoration: none;">Get directions</a>
          </div>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
          <div class="card lil-card">
            <span class="mb-3"><img class="" src="assets/icon/phone-rounded.svg" alt=""></span>
            <p class="title">+62 888 909 767</p>
            <p class="sub-title mb-0">Reservation</p>
          </div>
        </div>
      </div>

      <div class="row my-5">
        <div class="menu text-center">
          <p class="sub-title mb-2">Menu</p>
          <p class="title">Explore Our Best Menu</p>
        </div>

        <div class="splide" role="group" aria-label="Splide Basic HTML Example">
          <div class="splide__track pt-3 p-5">
        		<ul class="splide__list">
        			<li class="splide__slide px-4">
                <div class="card py-5">
                  <img class="menu-img w-100" src="assets/img/cold-hiyasi.png" alt="">
                  <div class="text-center mt-4">
                    <h5 class="menu-title">Cold Hiyasi</h5>
                    <p class="menu-desc">Chilled noodles topped with been sprouts, cucumber, tomatoes, chicken, ham and soft boiled egg. Served with home made sesame vinegar sauce and japanese hot mustard.
                    </p>
                  </div>
                </div>
              </li>

        			<li class="splide__slide px-4">
                <div class="card py-5">
                  <img class="menu-img w-100" src="assets/img/vegan-ramen.png" alt="">
                  <div class="text-center mt-4">
                    <h5 class="menu-title">Vegan Ramen</h5>
                    <p class="menu-desc">Light clear Japanese kelp and mushroom based soup with fried tofu skin, baby corn, bamboo, carrots, cabbage, mushrooms, bok choy, bean sprouts and green onions.
                    </p>
                  </div>
                </div>
              </li>

        			<li class="splide__slide px-4">
                <div class="card py-5">
                  <img class="menu-img w-100" src="assets/img/spicy-miso.png" alt="">
                  <div class="text-center mt-4">
                    <h5 class="menu-title">Spicy Miso</h5>
                    <p class="menu-desc">Rich pork bone soup with Japanese spicy miso, topped with thinly sliced pork, soft boiled egg, bamboo, carrots, cabbage, mushrooms, green onions, bok choy, bean sprouts.
                    </p>
                  </div>
                </div>
              </li>

              <li class="splide__slide px-4">
                <div class="card py-5">
                  <img class="menu-img w-100" src="assets/img/tan-tan-men.png" alt="">
                  <div class="text-center mt-4">
                    <h5 class="menu-title">Tan-Tan Men</h5>
                    <p class="menu-desc">Rich pork bone soup with spicy, sesame and nutty flavors topped with ground pork, soft boiled egg, bok choy and bean sprouts, served hot.
                    </p>
                  </div>
                </div>
              </li>

              <li class="splide__slide px-4" width="auto">
                <div class="card py-5">
                  <img class="menu-img w-100" src="assets/img/tonkotsu.png" alt="">
                  <div class="text-center mt-4">
                    <h5 class="menu-title">Tonkotsu</h5>
                    <p class="menu-desc">Rich pork bone soup base with hints of Japanese soy sauce topped with chashu pork, soft boiled egg, green onions, bean sprouts, and ginger.
                    </p>
                  </div>
                </div>
              </li>

              <li class="splide__slide px-4">
                <div class="card py-5">
                  <img class="menu-img w-100" src="assets/img/shio-chicken-ramen.png" alt="">
                  <div class="text-center mt-4">
                    <h5 class="menu-title">Shio Chicken Ramen</h5>
                    <p class="menu-desc">Light clear chicken soup topped with chicken chashu, soft boiled egg, bean sprouts, dried seaweeds and green onions, served fresh and hot.
                    </p>
                  </div>
                </div>
              </li>
        		</ul>
          </div>
        </div>
      </div>
    </div>

<section class="footer">
  <div class="container">
    <footer class="row row-cols-4 py-5 mt-4">
      <div class="col">
        <a href="index.html" class="navbar-brand d-flex align-items-center mb-3 d-inline-flex">just ramen</a>
        <p class="desc text-justify">a well known japanese restaurant in Bandung. Specialized on ramen and any japanese foods.</p>
      </div>

      <div class="col"></div>

      <div class="col">
        <h5 class="nav-col mb-3">Social Media</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Twitter</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Instagram</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Facebook</a></li>
        </ul>
      </div>

      <div class="col">
        <h5 class="nav-col mb-3">Our Links</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Menu</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Promo</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Cart</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Login</a></li>
        </ul>
      </div>
    </footer>
  </div>
</section>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="splide/js/splide.js"></script>
    <script type="text/javascript">
      var splide = new Splide( '.splide', {
      perPage: 3,
      height: '100%',
      padding: '3rem',
      rewind : true,
      breakpoints: {
  			766: {
  				perPage: 1,
          autoplay: true,
        },
        1000: {
  				perPage: 2,
        },
      }
      } );

      splide.mount();
    </script>

    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
