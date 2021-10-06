<?php
    session_start();
    include_once "pdo.php";

    $loc = $_SESSION['this'];

    if (isset($_SESSION['id']) || isset($_SESSION['private_key']) || isset($_SESSION['public_key'])) {
        unset($_SESSION['id']);
        unset($_SESSION['private_key']);

        $_SESSION['message'] = "Logged out successfully";

        $rivate_key = $_SESSION['private_key'];
        $public_key = $_SESSION['public_key'];

        date_default_timezone_set('Asia/Kolkata');
        $time = date('Y-m-d H:i:s');

        $sql = "INSERT INTO transaction (type, time, message) VALUES (:type, :time, :message)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':type' => "user logout",
            ":time" => $time,
            ":message" => "User with public id $public_key logged out"
        ));
        unset($_SESSION['public_key']);
    } else {
        $_SESSION['message'] = "Not logged in";
    }
    header("Location: $loc");
?>
