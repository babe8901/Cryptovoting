<?php
    session_start();
    include_once "pdo.php";

    $_SESSION['this'] = "aboutus.php";
    if (isset($_SESSION['message'])) {
        ?>
            <script>
                alert("<?=$_SESSION['message']?>");
            </script>
        <?php
        unset($_SESSION['message']);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Crypto Voting: About Us</title>

</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="./index.php"><img src="img/logo.jpg" height="30" width="41" alt=""></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-info fa-lg"></span> About</a></li>
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
                        <a href="#" class="btn btn-block nav-link btn-warning" id="castVote" role="button">Vote</a>
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
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
            <div class="col-12">
               <h3>About Us</h3>
               <hr>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>What is Blockchain ?</h5>
            </div>
            <div class="card-body">
                <p class="card-text">Blockchain is a shared, immutable ledger that facilitates the process of recording transactions and tracking assets in a business network. 
                    An asset can be tangible (a house, car, cash, land) or intangible (intellectual property, patents, copyrights, branding). 
                    Virtually anything of value can be tracked and traded on a blockchain network, reducing risk and cutting costs for all involved.</p>
            </div>
        </div>

        <br>

        <div class="card">
            <div class="card-header">
                <h5>Why blockchain is important ?</h5>
            </div>
            <div class="card-body">
                <p class="card-text">Business runs on information. 
                    The faster it’s received and the more accurate it is, the better. 
                    Blockchain is ideal for delivering that information because it provides immediate, 
                    shared and completely transparent information stored on an immutable ledger that can be accessed only by permissioned network members. 
                    A blockchain network can track orders, payments, accounts, production and much more. 
                    And because members share a single view of the truth, you can see all details of a transaction end-to-end, giving you greater confidence, 
                    as well as new efficiencies and opportunities.</p>
            </div>
        </div>

        <br>

<pre><h4>   <strong>Key elements of a Blockchain</strong></h4></pre>

        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="img/dlt.svg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Distributed ledger technology</h5>
                <p class="card-text">All network participants have access to the distributed ledger and its immutable record of transactions. 
                    With this shared ledger, transactions are recorded only once, eliminating the duplication of effort that’s typical of traditional business networks.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/immutable_records.svg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Immutable records</h5>
                <p class="card-text">No participant can change or tamper with a transaction after it’s been recorded to the shared ledger. 
                    If a transaction record includes an error, a new transaction must be added to reverse the error, and both transactions are then visible.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/smart_contracts.svg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Smart contracts</h5>
                <p class="card-text">To speed transactions, a set of rules — called a smart contract — is stored on the blockchain and executed automatically. 
                    A smart contract can define conditions for corporate bond transfers, include terms for travel insurance to be paid and much more.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
   </div>

   <br>

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="#">About</a></li>
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
		              <i class="fa fa-phone fa-lg"></i> +91 1234 5678<br>
		              <i class="fa fa-fax fa-lg"></i> +91 8765 4321<br>
		              <i class="fa fa-envelope fa-lg"></i><a href="mailto:cryptovoting@food.net"> cryptovoting@services.net</a>
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
