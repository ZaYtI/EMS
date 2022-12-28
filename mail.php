<?php

$entete  = 'MIME-Version: 1.0' . "\r\n";
$entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$entete .= 'From: antonin.riquart@gmail.com' . "\r\n";
$entete .= 'Reply-to: ' . $_POST['email'];
$message_entreprise = '<html">
            <body style="width: 75%; margin: auto;">
            <a style="width: 100%; height: 80px;" href="https://zupimages.net/viewer.php?id=22/48/qyrk.png"><img src="https://zupimages.net/up/22/48/qyrk.png" alt="" /></a>
       
            <h2 style="text-align: center;">Demande de location</h2>
            <hr style="height: 5px; background-color: #d7d7d7; width: 80%; margin: auto auto; border: none; border-radius: 5px 5px 5px 5px">
        <p><b>Sujet : </b>' . htmlspecialchars($_POST['sujet']) . '</p>
        <p><b>Email : </b>' . htmlspecialchars($_POST['email']) . '</p>
        <p><b>Nom : </b>' . htmlspecialchars($_POST['Name']) .'</p>
        <p><b>numero de telephone </b>' . htmlspecialchars($_POST['Tel']) .'</p>
        <p><b>Date de depart : </b>' . htmlspecialchars($_POST['Date']) .'</p>
        <p><b>Date de retour : </b>' . htmlspecialchars($_POST['DateA']) . '</p>
        <p><b>Message : </b>' . htmlspecialchars($_POST['area']) . '</p>
        <hr style="height: 5px; background-color: #d7d7d7; width: 80%; margin: 10px auto 10px auto; border: none; border-radius: 5px 5px 5px 5px;">
        <h3 style="text-align: center;">Merci de votre confiance</h3>
        </body>
        </html>';

$message = '<html">
            <body style="width: 75%; margin: auto;">
            <a style="width: 100%; height: 80px;" href="https://zupimages.net/viewer.php?id=22/48/qyrk.png"><img src="https://zupimages.net/up/22/48/qyrk.png" alt="" /></a>
       
            <h3 style="text-align: center;">Retour demande de location</h3>
            <hr style="height: 5px; background-color: #d7d7d7; width: 80%; margin: auto auto; border: none; border-radius: 5px 5px 5px 5px">
        <p><b>Sujet : </b>' . htmlspecialchars($_POST['sujet']) . '</p>
        <p><b>Nom : </b>' . htmlspecialchars($_POST['Name']) .'</p>
        <p><b>numero de telephone </b>' . htmlspecialchars($_POST['Tel']) .'</p>
        <p><b>Date de depart : </b>' . htmlspecialchars($_POST['Date']) .'</p>
        <p><b>Date de retour : </b>' . htmlspecialchars($_POST['DateA']) . '</p>
        <p><b>Message : </b>' . htmlspecialchars($_POST['area']) . '</p>
        <hr style="height: 5px; background-color: #d7d7d7; width: 80%; margin: 10px auto 10px auto; border: none; border-radius: 5px 5px 5px 5px;">
        <h4 style="text-align: center;">Merci de votre confiance</h4>
        </body>
        </html>';
$dest = "antonin.riquart@gmail.com";
    if(mail($dest,$_POST['sujet'],$message_entreprise,$entete) && mail($_POST['email'],$_POST['sujet'],$message,$entete)){
        echo 'envoie valide';
    }
    else{
        echo 'erreur d envoie';
    }
?>

