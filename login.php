<?php
    session_start();
    include_once "pdo.php";
    
    $loc = $_SESSION['this'];

    if (isset($_SESSION['id'])) {
        $_SESSION['message'] = "Already logged in";
    } else {

        $email = $_POST['loginEmail'];
        
        $sql = "SELECT COUNT(*) FROM users WHERE email = '$email'";
        $res = $pdo->query($sql);
        $count = $res->fetchColumn();

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $stmt = $pdo->query($sql);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($count == 0) {
            $_SESSION['message'] = "Account does not exist";

        } else {
            if ($row['password'] === $_POST['loginPassword']) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['private_key'] = $row['private_key'];
                $_SESSION['public_key'] = $row['public_key'];

                $private_key = $_SESSION['private_key'];
                $public_key = $_SESSION['public_key'];

                date_default_timezone_set('Asia/Kolkata');
                $time = date('Y-m-d H:i:s');

                $sql = "INSERT INTO transaction (type, time, message) VALUES (:type, :time, :message)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    ':type' => "user login",
                    ":time" => $time,
                    ":message" => "User with public id $public_key logged in"
                ));

                $_SESSION['message'] = "Logged in successfully";
               
            } else {
                $_SESSION['message'] = "Invalid password";
                
            }
        }
    }
    
    header("Location: $loc");
?>