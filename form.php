<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>contact</title>
    
</head>
<body>
    <div>

        <h1><?php
        echo "Merci " .$name .'<br>' ." votre message a bien été envoyé." .'<br>' ."Ci-dessous, un recapitulatif de vos informations";
        ?></h1>
        
        <ul>
            <li>Votre nom : <span ><?= htmlentities($name) ?></span></li>
            <li>Votre Email: <span ><?= htmlentities($email) ?></span></li>
            <li>Votre Telephone: <span ><?= htmlentities($phone) ?></span></li>
            <li>Votre message : <span ><br><?= htmlentities($message) ?></span></li>
        </ul>

        
    </div>

</body>
</html>