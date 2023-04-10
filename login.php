<?php
    session_start();
    if (isset($_SESSION['Fullname'])) {
        header("Location: index.php");
        exit();
    }
    require_once "inc/connect.php";
    // Start Add A Login User
    $msg = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['email'] !== '' | $_POST['password'] !== '') {
            $email    = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
            $stmt = $con->prepare("SELECT * FROM users WHERE email = :zemail");
            $stmt->bindParam('zemail', $email);
            $stmt->execute();
            $count = $stmt->rowCount();
            if ($count > 0) {
                $row = $stmt->fetch();
                if (password_verify($password, $row['password'])) {
                    $_SESSION['Fullname'] = $row['fullname'];
                    header("Location: index.php");
                    exit();
                }else {
                    $msg =  "<div class = 'alert alert-danger'>Invaild Data</div>";
                }
            }else {
                $msg =  "<div class = 'alert alert-danger'>Invaild Data</div>";
            }
            
        }else {
            $msg =  "<div class = 'alert alert-danger'>Please Complete All Failed Required</div>";
        }
    }
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
        <link rel="stylesheet" href="css/login.css">
        <!-- End Css Files -->
        <!-- Start Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- End Fonts -->
    </head>
    <body>
        <div class="login">
            <div class="container">
            <nav class="navbar navbar-expand-lg navbar-transparent mt-3">
                    <div class="container">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/nav-logo.png" alt="sustaing" id = 'img-logo'>
                        </a>
                    </div>
                </nav>
                <div class="form">
                    
                    <form name = 'login' class = 'login-form' method = 'POST'>
                        <div class="msg"><?php echo $msg;?></div>
                        <h2 class = 'text-center text-white'>Login</h2>
                        <input type="email" class = 'form-control mb-3 mt-3' name = 'email' id = 'client-email' placeholder = 'Email Address'>
                        <input type="password" class = 'form-control mb-3' name = 'password' id = 'client-pass' placeholder = 'Your Password'>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label text-white" for="flexCheckIndeterminate">
                                Remember Me
                            </label>
                        </div>
                        <button class = 'mt-3 mb-3 btn btn-lg btn-success d-block btn-block w-100' id = 'btn-login-form'>Login</button>
                        <a href="#" class = 'd-block text-center text-decoration-none'>Forget Password ?</a>
                    </form>
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
        <script src="js/login.js"></script>
        <!-- End JS Files -->
    </body>
</html>