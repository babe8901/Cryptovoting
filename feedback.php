<?php
    session_start();
    require_once "pdo.php";

    $loc = $_SESSION['this'];

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

    $_SESSION['message'] = "Feedback received";
    header("Location: $loc");
?>