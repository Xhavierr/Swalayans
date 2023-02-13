<?php
session_start();
if ($_SESSION['status'] != 'login') {
    header('location:index.php?pesan=belum_login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layout Horizontal - Mazer Admin Dashboard</title>
    <!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>

    <link rel="stylesheet" href="assets/css/main/app.css" />
    <link rel="stylesheet" href="assets/css/main/app-dark.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


    <style>
        #animasi {
            transition: transform 250ms;
            /* transition: background-color 0.5s ease; */
        }

        #animasi:hover {
            border: 2px solid;
            border-color: black;
            cursor: pointer;
        }

        #navbar {
            position: fixed;
            top: 0px;
            width: 100%;
            transition: top 0.3s;
        }

        body{
            font-size:14px;
            font-family: "Basel Grotesk","Karla","HelveticaNeue","Helvetica Neue",sans-serif;
            color: #212121;
            line-height: 1.375;
        }
    </style>
</head>

<body class="bg-white">
    <script src="assets/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header id="navbar" class="mb-5">
                <div class="header-top" style="height:40px;background-color:black">
                    <div class="text-white fa fa">letgo dadkwbkdbawdn wdoawnd, Shop Now</div>
                </div>
                <div class="header-top" style="height:50px">
                    <div class="row px-2">
                        <div class="col-4">
                                <!-- Burger button responsive -->
                                <a href="#" class="burger-btn d-block d-xl-none">
                                    <i class="bi bi-justify fs-3"></i>
                                </a>
                            <div class="logo d-none d-sm-block">
                                <img src="https://d3vfig6e0r0snz.cloudfront.net/static/images/flags/ID.png" alt="country">
                                <small>USD $</small>
                            </div>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                            <div class="fs-2 text-black" aria-hidden="true"> J I M ' S</div>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <div class="d-block d-xl-none">
                                <span class="fa fa-search"></span>
                            </div>
                            <div class="header-top-right d-none d-sm-block">
                                <div class="row" style="width:220px">
                                    <div class="col-4 border-end border-black d-flex justify-content-start">
                                        <h6 class="fa fa-user"> <?php echo $_SESSION[
                                            'username'
                                        ]; ?></h6>
                                    </div>
                                    <div class="col-4 border-end border-black d-flex justify-content-center">
                                        <h6 class="fa fa text-danger"> Log out</h6>
                                    </div>
                                    <div class="col-4 d-flex justify-content-start">
                                        <a href="user.php?page=cart" class="text-black">
                                            <i class="bi bi-cart"></i>
                                                <?php 
                                                    include 'koneksi.php';
                                                    $id_user = $_SESSION['id_user'];
                                                    $query = mysqli_query(
                                                        $koneksi,
                                                        "SELECT * FROM keranjang WHERE id_user = '$id_user'"
                                                    );
                                                    $data = mysqli_num_rows($query);
                                                ?>
                                            <span class="text-white badge bg-secondary"><?=$data?></span>      
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar bg-white shadow-sm">
                        <div class="row px-2">
                            <div class="col-10">
                                <div class="d-flex justify-content-start">
                                    <ul>
                                        <li class="menu-item">
                                            <a href="user.php?page=home" class="menu-link">
                                                <span class="text-black"><i class="bi bi-home"></i> Home</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="user.php?page=shop" class="menu-link">
                                                <span class="text-black"><i class="bi "></i> Shop</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="index.html" class="menu-link">
                                                <span class="text-black"><i class="bi "></i> Category</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                Search<i class="bi bi-search mx-2"></i>        
                                
                            </div>
                        </div>
                </nav>
            </header>

            <?php if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'shop':
                        include 'page/user/shop.php';
                        break;
                    case 'home':
                        include 'page/user/home.php';
                        break;
                    case 'detail_shop':
                        include 'page/user/detail_shop.php';
                        break;
                    case 'cart':
                        include 'page/user/cart.php';
                        break;
                }
            } ?>

            <!-- Footer -->
<footer class="text-center text-lg-start bg-black text-white mt-5">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fa fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-white">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-white">React</a>
          </p>
          <p>
            <a href="#!" class="text-white">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-white">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-white">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-white">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-white">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-white">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fa fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
          <p>
            <i class="fa fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
          <p><i class="fa fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
          <p><i class="fa fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
</footer>
<!-- Footer -->

        </div>
    </div>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
    ></script>
    <script src="assets/js/pages/horizontal-layout.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // When the user scrolls down 20px from the top of the document, slide down the navbar
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("navbar").style.top = "-40px";
            } else {
                document.getElementById("navbar").style.top = "0";
            }
        }
    </script>
</body>

</html>