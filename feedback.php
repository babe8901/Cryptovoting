<?php
    session_start();
    require_once "pdo.php";

    $sql = "INSERT INTO feedback (f_name, l_name, areacode, tel, may_we_contact, contact_mode, feedback, email)
    VALUES (:f_name, :l_name, :areacode, :tel, :may_we_contact, :contact_mode, :feedback, :email)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':f_name' => $_POST['firstname'],
        ':l_name' => $_POST['lastname'],
        ':areacode' => $_POST['areacode'],
        ':tel' => $_POST['telnum'],
        ':may_we_contact' => $_POST['may_we_contact'],
        ':contact_mode' => $_POST['contact_mode'],
        'feedback' => $_POST['feedback'],
        'email' => $_POST['emailid']
    ));

    $_SESSION['success'] = "Feedback received";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
</head>
<body>
    <h1>Feedback Submitted successfully</h1>

    <script>
        alert('Feedback submited');
    </script>
</body>
</html>