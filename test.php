<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    
</head>
<body>
    <div>
        <h1>Formlaire de contact</h1>
        <ul>
            <li>Votre nom : <span ><?= $name ?></span></li>
            <li>Votre Email: <span ><?= $email ?></span></li>
            <li>Votre message : <span ><?= $message ?></span></li>
        </ul>

        <h2>Merci ! Votre message a bien été envoyé 👉 👌</h2>
    </div>

</body>
</html>