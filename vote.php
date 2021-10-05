<?php
    session_start();
    require_once "pdo.php";

    if (! isset($_SESSION['id'])) {
        ?>
            <script>
                alert("Please login first to cast a vote");
            </script>           
        <?php
        // header("Location: index.html");
    }
?>