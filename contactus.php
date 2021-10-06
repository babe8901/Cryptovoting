<?php
    session_start();
    include_once "pdo.php";

    $_SESSION['this'] = "contactus.php";
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

    <title>Crypto Voting: About Us</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link href="css/styles.css" rel="stylesheet">
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
                        <li class="nav-item"><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                        <li class="nav-item"><a class="nav-link" href="./blockchain.php"><span class="fa fa-list fa-lg"></span> Blockchain</a></li>
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
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
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
            <div class="col-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-12">
               <h3>Location Information</h3>
            </div>
             <div class="col-12 col-sm-4 offset-sm-1">
                    <h5>Our Address</h5>
                    <address style="font-size: 100%">
                        121, Kandivali East<br>
                        Mumbai 400062<br>
                        INDIA<br>
                       <i class="fa fa-phone"></i>: +91 12345 67890<br>
                       <i class="fa fa-fax"></i>: +91 98765 43210<br>
                       <i class="fa fa-envelope"></i>:
                         <a href="mailto:cryptovoting@services.net">cryptovoting@services.net</a>
                    </address>
             </div>
             <div class="col-12 col-sm-6 offset-sm-1">
                 <h5>Map of our Location</h5>
             </div>
             <div class="col-12 col-sm-11 offset-sm-1">
                 <div class="btn-group" role="group">
                     <a role="button" class="btn btn-primary " href="tel:+911234567890"><i class="fa fa-phone"></i> Call</a>
                     <a role="button" class="btn btn-info" href="#"><i class="fa fa-skype"></i> Skype</a>
                     <a role="button" class="btn btn-success" href="mailto:confusion@food.net"><i class="fa fa-envelope-o"></i> Email</a>
                 </div>
             </div>
         </div>
 
         <div class="row row-content">
            <div class="col-12">
               <h3>Send us your Feedback</h3>
            </div>
             <div class="col-12 col-md-9">
                 <form method="POST" action="feedback.php">
                     <div class="form-group row">
                         <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                         <div class="col-md-10">
                             <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                         <div class="col-md-10">
                             <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="telnum" class="col-md-2 col-form-label">Contact Tel.</label>
                         <div class="col-5 col-md-3">
                             <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area Code">
                         </div>
                         <div class="col-7 col-md-7">
                             <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. Number">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="emailid" class="col-md-2 col-form-label">Email</label>
                         <div class="col-md-10">
                             <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-md-6 offset-md-2">
                             <div class="form-check">
                                 <input type="checkbox" class="form-check-input" name="may_we_contact" id="may_we_contact" value="yes">
                                 <label class="form-check-label" for="may_we_contact"><strong>May we contact you?</strong></label>
                             </div>
                         </div>
                         <div class="col-md-3 offset-md-1">
                             <select class="form-control" name="contact_mode" id="contact_mode">
                                 <option value="tel" id="contact_mode">Tel.</option>
                                 <option value="email" id="contact_mode">Email</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>
                         <div class="col-md-10">
                             <textarea class="form-control" id="feedback" name="feedback" placeholder="" rows="12"></textarea>
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="offset-md-2 col-md-10">
                             <button type="submit" class="btn btn-primary">
                                 Send Feedback
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
              <div class="col-12 col-md">
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
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./aboutus.php">About</a></li>
                        <li><a href="./blockchain.php">Blockchain</a></li>
                        <li><a href="#">Contact</a></li>
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

    
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./js/scripts.js"></script>
</body>

</html>
