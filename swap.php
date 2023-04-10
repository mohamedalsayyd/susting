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
        <link rel="stylesheet" href="css/swap.css">
        <!-- End Css Files -->
        <!-- Start Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- End Fonts -->
    </head>
    <body>
        <div class="swap">
            <div class="container">
            <nav class="navbar navbar-expand-lg navbar-transparent mt-3">
                    <div class="container">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/nav-logo.png" alt="sustaing" id = 'img-logo'>
                        </a>
                    </div>
                </nav>
                <div class="swap-con">
                    <div class="swaper text-white">
                        <div class="swaper-header">
                            <h4 class = 'text-center'>Swap</h4>
                            <p class="lead text-center">Trade tokens in an instand.</p>
                        </div>
                        <div class="swaper-body">
                            <div class="bnb-head d-flex align-items-center justify-content-between">
                                <div class="logo">
                                    <span class="iconify icon" data-icon="cryptocurrency:bnb" style="color: #f3ba2f;"></span>
                                    <span> BNB</span>
                                </div>
                                <div class="balance">Balance: <span class = 'balance-num'>0.98563</span></div>
                            </div>
                            <div class="bnb-input mt-3">
                                <input type="text" step="0.01" placeholder="0.0" class = 'form-control input-lg'>
                            </div>
                            <div class="mt-5 se-head d-flex align-items-center justify-content-between">
                                <div class="logo">
                                    <span> SE</span>
                                </div>
                                <div class="balance">Balance: <span class = 'balance-num'>37900000</span></div>
                            </div>
                            <div class="se-input mt-3">
                                <input type="text" step="0.01" placeholder="0.0" class = 'form-control input-lg'>
                            </div>
                        </div>
                        <div class="swaper-btn mt-3">
                            <button class = 'btn btn-success btn-lg d-block w-100'>Enter an amount.</button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Start JS Files -->
        <script src="js/all.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
        <script src="js/swap.js"></script>
        <!-- End JS Files -->
    </body>
</html>