<?php
    session_start();
    require_once "pdo.php";

    $sql = "SELECT * FROM users WHERE email = `:email`";
    echo $sql;
    $stmt = $pdo->query($sql);
    $stmt -> execute(array(
        'email' => $_POST['loginEmail']
    ));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (count($row) === 1) {
        if ($_POST['loginPassword'] === $row['password']) {
            $_SESSION['id'] = $row['id'];
            ?>
                <script>
                    alert("Logged in successfully");
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Password does not match");
                </script>
            <?php
        }
    } else {
        ?>
            <script>
                alert("Invalid email id");
            </script>
        <?php
    }
?>