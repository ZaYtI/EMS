<?php
require_once 'vendor/autoload.php';

$date = $_POST['Date'];
$dateA = $_POST['DateA'];
$email = $_POST['email'];
$nom = $_POST['Name'];
$num = $_POST['Tel'];
$sujet = $_POST['sujet'];
$area = $_POST['area'];
$car = $_GET['car'];
$abonnement = $_GET['abonnement'];
function champ($date, $dateA, $mail, $nom, $num, $sujet){
    if($date == null || $dateA == null || $mail == null || $nom == null || $num == null || $sujet == null){
        return false;
    }
    return true;
}

function verifDate($date, $dateA){
    if($date > $dateA){
        return false;
    }
    elseif ($date < date("Y-m-d")){
        return false;
    }
    return true;
}

function verifMail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;
}

function sendmail($date, $dateA, $email, $nom, $num, $sujet,$area,$car,$abonnement){
    if ($car != null){
        $message_entreprise = '<html">
                <body style="width: 75%; margin: auto;">
                <a style="width: 100%; height: 80px;" href="https://zupimages.net/viewer.php?id=22/48/qyrk.png"><img src="https://zupimages.net/up/22/48/qyrk.png" alt="" /></a>
                <h2 style="text-align: center;">Demande de location</h2>
                <hr style="height: 5px; background-color: #d7d7d7; width: 80%; margin: auto auto; border: none; border-radius: 5px 5px 5px 5px">
            <p><b>Sujet : </b>' . htmlspecialchars($sujet) . '</p>
            <p><b>Email : </b>' . htmlspecialchars($email) . '</p>
            <p><b>Nom : </b>' . htmlspecialchars($nom) .'</p>
            <p><b>numero de telephone </b>' . htmlspecialchars($num) .'</p>
            <p><b>Date de depart : </b>' . htmlspecialchars($date) .'</p>
            <p><b>Date de retour : </b>' . htmlspecialchars($dateA) . '</p>
            <p><b>Message : </b>' . htmlspecialchars($area) . '</p>
            <p><b>Vehicule : </b>' . htmlspecialchars($car) . '</p>
            <hr style="height: 5px; background-color: #d7d7d7; width: 80%; margin: 10px auto 10px auto; border: none; border-radius: 5px 5px 5px 5px;">
            <h3 style="text-align: center;">Merci de votre confiance</h3>
            </body>
            </html>';

        $message = '<html">
                <body style="width: 75%; margin: auto;">
                <a style="width: 100%; height: 80px;" href="https://zupimages.net/viewer.php?id=22/48/qyrk.png"><img src="https://zupimages.net/up/22/48/qyrk.png" alt="" /></a>
                <h2 style="text-align: center;">retour demande de location</h2>
                <hr style="height: 5px; background-color: #d7d7d7; width: 80%; margin: auto auto; border: none; border-radius: 5px 5px 5px 5px">
            <p><b>Sujet : </b>' . htmlspecialchars($sujet) . '</p>
            <p><b>Date de depart : </b>' . htmlspecialchars($date) .'</p>
            <p><b>Date de retour : </b>' . htmlspecialchars($dateA) . '</p>
            <p><b>Message : </b>' . htmlspecialchars($area) . '</p>
            <p><b>Vehicule : </b>' . htmlspecialchars($car) . '</p>
            <hr style="height: 5px; background-color: #d7d7d7; width: 80%; margin: 10px auto 10px auto; border: none; border-radius: 5px 5px 5px 5px;">
            <h3 style="text-align: center;">Merci de votre confiance</h3>
            </body>
            </html>';
    }elseif ($abonnement!=null){
        $title = 'Demande d abonnement';
        $message_entreprise = '<html">
                <body style="width: 75%; margin: auto;">
                <a style="width: 100%; height: 80px;" href="https://zupimages.net/viewer.php?id=22/48/qyrk.png"><img src="https://zupimages.net/up/22/48/qyrk.png" alt="" /></a>
                <h2 style="text-align: center;">Demande d abonnement</h2>
                <hr style="height: 5px; background-color: #d7d7d7; width: 80%; margin: auto auto; border: none; border-radius: 5px 5px 5px 5px">
            <p><b>Sujet : </b>' . htmlspecialchars($sujet) . '</p>
            <p><b>Email : </b>' . htmlspecialchars($email) . '</p>
            <p><b>Nom : </b>' . htmlspecialchars($nom) .'</p>
            <p><b>numero de telephone </b>' . htmlspecialchars($num) .'</p>
            <p><b>Date de depart : </b>' . htmlspecialchars($date) .'</p>
            <p><b>Date de fin : </b>' . htmlspecialchars($dateA) . '</p>
            <p><b>Message : </b>' . htmlspecialchars($area) . '</p>
            <p><b>abonnement : </b>' . htmlspecialchars($abonnement) . '</p>
            <hr style="height: 5px; background-color: #d7d7d7; width: 80%; margin: 10px auto 10px auto; border: none; border-radius: 5px 5px 5px 5px;">
            <h3 style="text-align: center;">Merci de votre confiance</h3>
            </body>
            </html>';

        $message = '<html">
                <body style="width: 75%; margin: auto;">
                <a style="width: 100%; height: 80px;" href="https://zupimages.net/viewer.php?id=22/48/qyrk.png"><img src="https://zupimages.net/up/22/48/qyrk.png" alt="" /></a>
                <h2 style="text-align: center;">retour demande d abonnement</h2>
                <hr style="height: 5px; background-color: #d7d7d7; width: 80%; margin: auto auto; border: none; border-radius: 5px 5px 5px 5px">
            <p><b>Sujet : </b>' . htmlspecialchars($sujet) . '</p>
            <p><b>Date de depart : </b>' . htmlspecialchars($date) .'</p>
            <p><b>Date de fin : </b>' . htmlspecialchars($dateA) . '</p>
            <p><b>Message : </b>' . htmlspecialchars($area) . '</p>
            <p><b>abonnement : </b>' . htmlspecialchars($abonnement) . '</p>
            <hr style="height: 5px; background-color: #d7d7d7; width: 80%; margin: 10px auto 10px auto; border: none; border-radius: 5px 5px 5px 5px;">
            <h3 style="text-align: center;">Merci de votre confiance</h3>
            </body>
            </html>';
    }

    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
        ->setUsername('antonin.riquart@gmail.com')
        ->setPassword('vvsdccjctrqxmuye')
    ;

    $mailer = new Swift_Mailer($transport);

    $mail = (new Swift_Message($title))
        ->setFrom(['antonin.riquart@gmail.com' => 'Antonin Riquart'])
        ->setTo(['antonin.riquart@gmail.com' => 'Antonin Riquart'])
        ->setBody($message_entreprise, 'text/html')
    ;

    $mail2 = (new Swift_Message('Retour ' . $title))
        ->setFrom(['antonin.riquart@gmail.com' => 'Antonin Riquart'])
        ->setTo([$email => $nom])
        ->setBody($message, 'text/html')
    ;

    if($mailer->send($mail2) && $mailer->send($mail)){
        header('Location: contact.php?success=0');
    }
    else{
        header('Location: contact.php?success=1&error=3');
    }
}

if(champ($date, $dateA, $email, $nom, $num, $sujet)){
    if(verifDate($date, $dateA)){
        if(verifMail($email)){
            sendmail($date, $dateA, $email, $nom, $num, $sujet, $area, $car, $abonnement);
        }
        else{
            header('Location: contact.php?success=1&error=1');
        }
    }else{
        header('Location: contact.php?success=1&error=0');
    }
}else{
    header('Location: contact.php?success=1&error=2');
}



