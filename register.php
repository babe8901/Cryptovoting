<?php
    session_start();
    require_once "pdo.php";

    $loc = $_SESSION['this'];

    $email = $_POST['registerEmail'];

    $sql = "SELECT COUNT(*) FROM users WHERE email = '$email'";
    $res = $pdo->query($sql);
    $count = $res->fetchColumn();

    if ($count == 0) {
        $password = $_POST['registerPassword'];

        $public_salt = "cryptocurrency";
        $private_salt = "bitcoin";

        $public_key = hash('sha256', $password.$public_salt);
        $private_key = hash('sha256', $password.$private_salt);

        $sql = "INSERT INTO users (name, email, password, public_key, private_key) VALUES (:name, :email, :password, :public_key, :private_key)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':name' => $_POST['registerName'],
            ':email' => $_POST['registerEmail'],
            ':password' => $_POST['registerPassword'],
            ':public_key' => $public_key,
            ':private_key' => $private_key
        ));

        date_default_timezone_set('Asia/Kolkata');
        $time = date('Y-m-d H:i:s');

        $sql = "INSERT INTO transaction (type, time, message) VALUES (:type, :time, :message)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':type' => "user created",
            ":time" => $time,
            ":message" => "New user registered with public id $public_key"
        ));
        
        $_SESSION['message'] = "Registration successful at $time";
    } else {
        $_SESSION['message'] = "Email id already used";
    }

    header("Location: $loc");
?>