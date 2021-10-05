<?php
    session_start();
    require_once "pdo.php";

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

    $_SESSION['success'] = "Registration successful";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <h1>Register</h1>
    <script>
        $(document).ready(function() {
            alert("registered successfully");
        })
    </script>
</body>
</html>