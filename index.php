<?php
    session_start();
    include_once "pdo.php";

    $_SESSION['this'] = "index.php";
    if (isset($_SESSION['message'])) {
        ?>
            <script>
                alert("<?=$_SESSION['message']?>")
            </script>
        <?php
        unset($_SESSION['message']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Crypto-Voting</title>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="./index.php"><img src="img/logo.jpg" height="30" width="41" alt=""></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                        <li class="nav-item"><a class="nav-link" href="./blockchain.php"><span class="fa fa-list fa-lg"></span> Blockchain</a></li>
                        <li class="nav-item"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                </ul>
                <span class="navbar-text">
                    <a href="#" id="loginButton" class="">
                        <span class="fa fa-sign-in"></span> Login
                    </a>
                </span>
                <span class="navbar-text">
                    <a href="./logout.php" id="logoutButton" class="">
                        <span class="fa fa-sign-out"></span> Logout
                    </a>
                </span>
                <span class="navbar-text">
                    <a href="#" id="registerButton" class="">
                        <span class="fa fa-user-plus"></span> Register
                    </a>
                </span>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Crypto-Voting</h1>
                    <p>Vote securely using the blockchain Technology</p>
                </div>
                <div class="col-12 col-sm align-self-center">
                    <img src="img/logo.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-sm align-self-center">
                    <!-- <button class="btn btn-block btn-warning"> -->
                        <a href="#" id="castVote" class="btn btn-block nav-link btn-warning">Vote</a>
                    <!-- </button> -->
                </div>
            </div>
        </div>
    </header>

    <?php
        require_once "loginModal.php";
        require_once "registerModal.php";
        require_once "voteModal.php";
    ?>

    <div class="container">
        <div class="row row-content">
            <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="img/blockchain.jpg" class="d-block img-fluid w-100 h-100" alt="blockchain">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/transaction.webp" alt="buffet" class="d-block img-fluid w-100">
                            <div class="carousel-caption d-none d-md-block">
                                
                            </div>
                        </div>
                        <div class="carousel-item">
                            
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <a href="#mycarousel" class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a href="#mycarousel" class="carousel-control-next" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                    <button class="btn btn-danger btn-sm" id="carouselButton">
                        <span class="fa fa-pause"></span>
                    </button>
                    </div>
                </div>
            </div>
        </div>

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./aboutus.php">About</a></li>
                        <li><a href="./blockchain.php">Blockchain</a></li>
                        <li><a href="./contactus.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              121, Kandivali East<br>
		              Mumbai 400062<br>
		              INDIA<br>
		              <i class="fa fa-phone fa-lg"></i> +91 12345 67890<br>
		              <i class="fa fa-fax fa-lg"></i> +91 98765 43210<br>
		              <i class="fa fa-envelope fa-lg"></i><a href="mailto:cryptovoting@services.net"> cryptovoting@services.net</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:cryptovoting@services.net"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2021 Crypto-Voting</p>
                </div>
           </div>
        </div>
    </footer>

    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./js/scripts.js"></script>
</body>
</html>