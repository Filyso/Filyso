<?php
	header("Content-type: text/html; charset: UTF-8");

?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <link rel="stylesheet" href="../style.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:600,900" rel="stylesheet">
    </head>

    <body>
        <footer class="footer">

            <div class="footerGauche">

                <img class="logo" src="../images/logo_couleur.png" alt="logo">


                <p class="footer-links">
                    <a href="./about.php">L'équipe</a> ·
                    <a href="./about.php">Boîte à idée</a> ·
                    <a href="./about.php">À venir</a>

                </p>

                <div class="footerReseaux">
                    <!- lier les réseaux sociaux ->
                    <a href=""><img src="../images/Facebook.png"></a>
                    <a href=""><img src="../images/Twitter.png"></a>
                    <a href=""><img src="../images/Instagram.png"></a>

                </div>

            </div>

            <div class="footerDroite">

                <p>Contactez-nous</p>

                <form action="#" method="post">

                    <input type="email" name="email" placeholder="Email" required />
                    <textarea name="message" placeholder="Message" required></textarea>
                    <button>Envoyer</button>

                </form>

            </div>

        </footer>
    </body>