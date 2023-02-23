<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/fontforall.css">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/styles_nav.css">
    <link rel="stylesheet" href="styles/styles_footer.css">
    <link rel="stylesheet" href="styles/stylesforcontact.css">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="lib/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="icon" type="image/png" sizes="16x16" href="images/Logo.png" >
    <title>Nous Contacter</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="index.html"><img src="images/Logo-removebg-preview-removebg-preview.png" alt=""></a>
            <div class="pages">
                <a href="location.html">Location</a>
                <a href="gestion_flotte.html">Entreprise</a>
            </div>
        </div>
        <div class="reseaux">
            <div class="menu_plein">
                <i onclick="OnClickFacebook()" class="fab fa-facebook-f"></i>
                <i onclick="OnClickTwitter()" class="fab fa-twitter"></i>
                <i onclick="OnClickInstagram()" class="fab fa-instagram"></i>
            </div>
        </div>
    </div>
    <nav>
        <ul>
            <li><a href="index.html">Location</a></li>
            <li><a href="index.html">Entreprise</a></li>
        </ul>
    </nav>
    <div class="banniere">
    </div>
    <div class="inter">
        <a href="208.html"><i class="fa-solid fa-circle-arrow-left"></i></a>
        <h1>NOUS CONTACTER</h1>
    </div>
        <form method="post" action="mail.php?<?php if (isset($_GET['car'])){
            echo 'car='.$_GET['car'];

        }else{
            echo 'abonnement='.$_GET['abonnement'];
        }?>">
            <div class="start_form">
                <div class="Nom">
                    <label for="Nom">Nom :</label>
                    <input type="text" id="Nom" name="Name" placeholder="Entrez votre Nom" required>
                </div>
                <div class="Telephone">
                    <label for="Tel">Numero de telephone:</label>
                    <input type="tel" name="Tel" id="Tel" placeholder="+33 ..." minlength="10" maxlength="10" onkeyup="onlyNumber()" required>
                </div>
                <div class="Date_Depart">
                    <label for="Date"> Choisir la date de départ :</label>
                    <input type="date" name="Date" id="Date" value="Date">
                </div>
                <div class="Date_Arriver">
                    <label for="DateA" > Choisir la date de fin :</label>
                    <input type="date" name="DateA" id="DateA">
                </div>
                <div class="email">
                    <label for="email">Adresse e-mail(courriel) :</label>
                    <input type="email" name="email" id="email" placeholder="ems.location@gmail.com" required>
                </div>
                <div class="sujet">
                    <label for="sujet">Sujet :</label>
                    <input type="text" name="sujet" id="sujet" placeholder="Sujet de votre mail" required>
                </div>
            </div>
                <div class="description">
                    <label for="area">Information Complémentaire :</label>
                    <textarea  name="area" id="area" placeholder="Entrer vos information complémentaire"></textarea>
                </div>
            <div class="bouton">
                <?php
                    if(isset($_GET['success'])){
                        if($_GET['success'] == 0){
                            echo '<p  class="success" style="color: green; text-align: center; padding-top: 10px;">Votre message a bien été envoyé !</p>';
                        }
                        else{
                            if (isset($_GET['error'])){
                                $error = $_GET['error'];
                                if($error == 0){
                                    echo '<p  class="success" style="color: red; text-align: center; padding-top: 10px;">Verifier les dates !</p>';
                                }
                                elseif ($error == 2){
                                    echo '<p  class="success" style="color: red; text-align: center; padding-top: 10px;">Veillez a remplir chaque champ !</p>';
                                }
                                elseif ($error == 3){
                                    echo '<p  class="success" style="color: red; text-align: center; padding-top: 10px;">Erreur lors de l envoie du mail !</p>';
                                }
                                elseif ($error == 1){
                                    echo '<p  class="success" style="color: red; text-align: center; padding-top: 10px;">Le mail n est pas correct !</p>';
                                }
                            }
                        }
                    }
                ?>
                <button id="valid" type="submit">VALIDER</button>
                <button type="reset">ANNULER</button>
            </div>
        </form>
</body>
<footer>
    <div class="logo_footer">
        <img src="images/logo_fond_vert.png" alt="logo_EMS">
    </div>
    <div class="information">
        <div class="reseaux_footer">
            <h2>Réseaux</h2>
            <ul>
                <li><i class="fab fa-facebook-f" style="color: white; padding-right: 5px;"></i><a href="http://">Facebook</a></li>
                <li><i class="fab fa-instagram" style="color: white; padding-right: 5px;"></i><a href="http://">Instagram</a></li>
                <li><i class="fab fa-twitter" style="color: white; padding-right: 5px;"></i><a href="http://">Twitter</a></li>
            </ul>
        </div>
        <div class="contact">
            <h2>Contact</h2>
            <ul>
                <li><i class="fa-solid fa-mail-bulk" style="color: white; padding-right: 5px;"></i><a href="mailto:ems_location@gmail.com">enzo.taterka@emslocation.fr</a></li>
                <li><i class="fa-solid fa-teletype" style="color: white; padding-right: 5px;"></i><a href="tel:+33763722179">07.63.72.21.79</a></li>
            </ul>
        </div>
    </div>
    <div class="localisation">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.479940033915!2d2.6061620159114334!3d50.45078689522143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd3d7b00f19f1f%3A0x510a462f4b60fa32!2s105%20Allee%20Raymond%20Derancy%2C%2062620%20Barlin%2C%20France!5e0!3m2!1sfr!2slu!4v1677076847292!5m2!1sfr!2slu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
</footer>
<?php if(isset($_GET['success'])):  ?>
<script>
    window.history.replaceState({}, document.title, window.location.pathname);
</script>
<?php endif ?>
<script src="js/text.js"></script>
</html>