<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layout Horizontal - Mazer Admin Dashboard</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/extensions/choices.js/public/assets/styles/choices.css" />
    <link rel="stylesheet" href="assets/css/main/app.css" />
    <link rel="stylesheet" href="assets/css/main/app-dark.css" />
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png" />

    <link rel="stylesheet" href="assets/extensions/rater-js/lib/style.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/shared/iconly.css" />
    <link rel="stylesheet" href="assets/extensions/simple-datatables/style.css" />

    <link rel="stylesheet" href="assets/css/pages/simple-datatables.css" />
    <link rel="stylesheet" href="assets/extensions/rater-js/lib/style.css" />

    <style>
        #animasi {
            transition: transform 250ms;
            /* transition: background-color 0.5s ease; */
        }

        #animasi:hover {
            border: 2px solid;
            border-color: #435ebe;
            cursor: pointer;
            transform: translateY(-10px);
        }

        #navbar {
            position: fixed;
            top: 0px;
            width: 100%;
            transition: top 0.3s;
        }
    </style>
</head>

<body class="bg-white">
    <script src="assets/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header id="navbar" class="mb-5">
                <div class="header-top" style="height:40px;background-color:#CB0000">
                    <div class="text-white fa fa">letgo dadkwbkdbawdn wdoawnd, Shop Now</div>
                </div>
                <div class="header-top" style="height:50px">
                    <div class="container">
                        <div class="logo">
                            <img src="https://d3vfig6e0r0snz.cloudfront.net/static/images/flags/ID.png" alt="country"> $
                            USD
                        </div>
                        <i class="fs-4 fw-bold text-black" aria-hidden="true" style="font-family:Helvetica Neue"> JIM'S
                            STORE</i>
                        <div class="header-top-right">
                            <div class="row" style="width:160px">
                                <div class="col-6 border-end border-black d-flex justify-content-start">
                                    <h6 class="fa fa-user"> <?php echo $_SESSION['username']; ?></h6>
                                </div>
                                <div class="col-6 border-black d-flex justify-content-center">
                                    <h6 class="fa fa text-danger"> Log out</h6>
                                </div>
                            </div>

                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar bg-white">
                    <div class="container">
                        <div class="row">
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
                                                <span class="text-black"><i class="bi bi-grid-fill"></i> Shop</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="index.html" class="menu-link">
                                                <span class="text-black"><i class="bi bi-grid-fill"></i> Category</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
                                        <input class="form-control me-2" type="search" placeholder="Search"
                                            aria-label="Search">
                                    </div>
                                    <div class="col-2">
                                        <div class="">
                                            <i class="bi bi-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav>
            </header>

            <?php 
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                switch($page){
                    case 'shop';
                    include 'page/shop.php';
                    break;
                    case 'home';
                    include 'page/home.php';
                    break;
                }
            }
        ?>

        </div>
    </div>
    <script src="assets/js/pages/horizontal-layout.js"></script>

    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="assets/js/pages/form-element-select.js"></script>
    <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="assets/js/pages/simple-datatables.js"></script>
    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

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