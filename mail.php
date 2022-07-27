<?php
    if (isset($_POST['message'])) {
        $message="Ce Message vous a était envoyer depuis le site EMS location
        NOM:" .$_POST["Name"] ."
        Telephone:" .$_POST["Tel"] ."
        Date de départ:" .$_POST["Date"] ."
        Date d'arrive:" .$_POST["DateA"] ."
        email:" .$_POST["email"] ."
        Message:" .$_POST["descript"];
        $retour = mail('antonin.riquart@gmail.com', $_POST["sujet"] , $message, 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST["email"]);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
        else
            echo '<p>Votre message ne peux pas etre envoyer verifier les informations transmise';
    }
?>

