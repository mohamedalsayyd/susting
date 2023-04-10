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
            <!-- Start Airdrop -->
            <!-- End Airdrop -->
            <section class="airdrop">
                <div class="container">
                    <h1 class = 'text-center text-white mt-5 mb-5 wow animate__backInUp' data-wow-duration="1s">AIRDROP ACTIVITY</h1>
                    <h1 class = 'text-center text-white mb-5 wow animate__backInUp' data-wow-duration="1s">ACTIVITY ENDS!</h1>
                    <div class="row text-white mt-5">
                        <div class="col-md-6 mb-3 wow animate__backInLeft" data-wow-duration="1s">
                            <div class="item text-center">
                                <p>AIRDROP BEGINS: 2022-04-17，Sun</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 wow animate__backInRight" data-wow-duration="1s">
                        <div class="item text-center">
                                <p>END OF AIRDROP: 2022-05-17，Tue</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class = 'btn btn-success btn-lg wow animate__backInDown' data-wow-duration="1s">RECEIVE AIRDROP</button>
                    </div>
                    <h2 class = 'text-center text-white mt-5 mb-5 wow animate__backInRight' data-wow-duration="1s">ABOUT $ECE</h2>

                    <div class="row ">
                        <div class="col-md-6 about-ace wow animate__backInLeft" data-wow-duration="1s">

                            <div class="desc text-white">
                                <p>Go to "Bridge" to transfer your $ECE token from BNB chain to PieceNetwork.</p>
                                <p>
                                    $ECE is the symbol of governance token of PieceNetwork.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6 about-ace wow animate__backInLeft" data-wow-duration="1s">

                            <div class="desc text-white">
                                <p>PieceNetwork It is a decentralized EVC expansion platform, and we have a low transaction fee EVM chain to compete with Etoubus 2.0</p>
                                <p>We are tested DAPP, block scanner, faucet, bridge, pieceswap ..</p>
                            </div>
                        </div>
                    </div>
                    <div class="rule text-white">
                        <h1 class = 'text-center mt-5 mb-5 wow animate__backInUp text-main' data-wow-duration="1s">RULE INTRODUCTION</h1>
                        <div class="all  wow animate__backInLeft" data-wow-duration="1s">

                            <div>
                                <p>$ECE AIRDROP</p>
                            </div>
                            <div>
                                <p>NUMBER OF AIRDROPS：1,000,000 ECE(1%)</p>
                            </div>
                            <div>
                                <p>
                                    ISSUE RULES ： $ECE The community airdrop activity will be opened on April 17, 2022, and the airdrop time is 30 days.
                                </p>
                                <p>
                                    Community users can submit the BEP20 wallet address to receive the ECE airdrops by completing the task at the website, and the number of individual addresses can receive 20 $ECE.
                                </p>
                                <p>
                                    This wheel airdrow is free, and the empty investment is unified after the event.
                                </p>
                                <p>
                                This wheel is expected to be 50K, and the total amount of airdrop is complete. If it is not received, the unpaid part is permanently destroyed.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mission text-white">
                        <h1 class = 'text-center mt-5 mb-5 wow animate__backInUp text-main' data-wow-duration="1s">AIRDROP MISSION</h1>
                        <div class="all wow animate__backInUp" data-wow-duration="1s">

                            <div class="group">
    
                                <div class="heading-mis d-flex align-items-center">
                                    <span class = 'icon'><i class="fa-solid fa-1 fa-2x"></i></span>
                                    <p>FOLLOW US AND PRAISE, FORWARD THE ESSAY</p>
                                </div>
                                <div class="input">
                                    <input type="text" class = 'form-control input-lg' placeholder="Your twitter, e.g. @PieceNetwork">
                                </div>
                            </div>
                            <div class="group">
    
                                <div class="heading-mis d-flex align-items-center">
                                    <span class = 'icon'><i class="fa-solid fa-2 fa-2x"></i></span>
                                    <p> SUBSCRIBE TO TG CHANNEL</p>
                                </div>
                                <div class="heading-mis d-flex align-items-center">
                                    <span class = 'icon'><i class="fa-solid fa-3 fa-2x"></i></span>
                                    <p>  JOIN TG GROUP</p>
                                </div>
                                <div class="input">
                                    <input type="text" class = 'form-control input-lg' placeholder="Your telegram account, e.g. sustaingpowerofcryptogroup">
                                </div>
                            </div>
                            <div class="group">
    
                                <div class="heading-mis d-flex align-items-center">
                                    <span class = 'icon'><i class="fa-solid fa-4 fa-2x"></i></span>
                                    <p>FILL IN THE ADDRESS</p>
                                </div>
                                <div class="input">
                                    <input type="text" class = 'form-control input-lg' placeholder="Your twitter, e.g. @Sustaing2022A">
                                </div>
                            </div>
                            <div class="text-center"><button class = 'btn btn-submit btn-success btn-lg'>SUBMIT</button></div>
                        </div>
                    </div>
                </div>
            </section>
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