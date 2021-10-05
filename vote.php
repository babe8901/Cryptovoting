<?php
    session_start();
    require_once "pdo.php";

    $loc = $_SESSION['this'];

    if (! isset($_SESSION['id'])) {
        $_SESSION['message'] = "Please login first to cast a vote";
        header("Location: $loc");
    } else {
        
    }
?>