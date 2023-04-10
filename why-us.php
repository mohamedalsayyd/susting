<?php
    session_start();
    session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sustaing</title>
        <!-- Start Icon -->
        <link rel="icon" type="image/png" href="images/nav-logo.png"/>
        <!-- End Icon -->
        <!-- Start Css Files -->
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
        <!-- End Css Files -->
        <!-- Start Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- End Fonts -->
    </head>
    <body>
            <!-- Start Main Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent">
                <div class="container">
                    <a class="navbar-brand" href="https://sustaing.com/">
                        <img src="images/nav-logo.png" alt="sustaing" id = 'img-logo'>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-all">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="https://sustaing.com/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="airdrop.php">air drop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://drive.google.com/file/d/1Sx5-9ZFmSatg4crIfyiwTCWVWHdBw02p/view?usp=sharing">white paper</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="roadmap.php">Roadmap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="why-us.php">why us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="swap.php">shop</a>
                            </li>
                            <?php
                                if (!isset($_SESSION['Fullname']) ) {
                                    ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.php">login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="signup.php">
                                                <button class = 'btn btn-success'>Sign Up</button>
                                            </a>
                                        </li>
                                    <?php
                                }else {
                                    ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?php echo $_SESSION['Fullname']?>
                                        </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                    </ul>
                                    </li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Main Navbar -->
            <!-- Start Why-US -->
                <section class = 'why-us mt-5 mb-5'>
                    <div class="container">
                        <h1 class = 'text-center mt-3 mb-3' > WHY US</h1>
                        <div class="box">
                            <p class="lead">
                            Our project is real and realistic, and we aim to develop sustainable energy technology, and we aim to preserve the environment, and we aim to gain the people who will involve us in the project.
                            </p>
                        </div>
                    </div>
                </section>
            <!-- End Why-US -->
            <!-- Start Footer -->
            <footer>
            <div class="widget-footer">
                <div class="container">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <h3 class = 'mb-3'> <span class = 'heading mb-3'>Archives</span></h3>
                                <span class = 'd-block text-white'><a href="#" class="text-white text-decoration-none">March 2022</a></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <h3 class = 'mb-3'> <span class = 'heading mb-3'>Categories</span></h3>
                                <span class = 'd-block text-white'><a href="#" class="text-white text-decoration-none">Blog Classic</a></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <h3 class = 'mb-3'> <span class = 'heading mb-3'>Meta</span></h3>
                                <span class = 'd-block text-white'><a href = '#' class="text-white text-decoration-none">Register</a></span>
                                <span class = 'd-block text-white'><a href = '#' class="text-white text-decoration-none">Login</a></span>
                                <span class = 'd-block text-white'><a href="#" class="text-white text-decoration-none">Entries Feed</a></span>
                                <span class = 'd-block text-white'><a href="#" class="text-white text-decoration-none">Comments Feed</a></span>
                                <span class = 'd-block text-white'><a href="#" class="text-white text-decoration-none">Wordpress.org</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    copyright &copy; 2021 Energo. All Rights Reserved.
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <!-- Start JS Files -->
        <script src="js/all.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>        
        <!-- End JS Files -->
    </body>
</html>