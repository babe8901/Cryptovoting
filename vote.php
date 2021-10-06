<?php
    session_start();
    require_once "pdo.php";

    $loc = $_SESSION['this'];

    if (! isset($_SESSION['id'])) {
        $_SESSION['message'] = "Please login first to cast a vote $favSub";
    } else {
        $private_key = $_SESSION['private_key'];
        $public_key = $_SESSION['public_key'];
        $favSub = $_POST['fav-sub'];

        $file = file_get_contents("transaction.json");
        $json = json_decode($file, true);

        $json[0]["$favSub"] += 1;

        $newjson = json_encode($json);
        file_put_contents("transaction.json", $newjson);

        date_default_timezone_set('Asia/Kolkata');
        $time = date('Y-m-d H:i:s');

        $sql = "INSERT INTO transaction (type, time, message) VALUES (:type, :time, :message)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':type' => "user voted",
            ":time" => $time,
            ":message" => "User with public id $public_key voted for $favSub"
        ));
        $_SESSION['message'] = "Voted successfully";
    }

    header("Location: $loc");
?>