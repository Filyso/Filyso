<?php
	header("Content-type: text/html; charset: UTF-8");

?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <link rel="stylesheet" href="../style.css" type="text/css" />
    </head>

    <body>
        <footer class="footer">

            <div class="footerGauche">

                <img class="logo" src="../images/logo_couleur.png" alt="logo">


                <p class="footer-links">
                    <a href="./about.html">L'équipe</a> ·
                    <a href="./about.html">Boîte à idée</a> ·
                    <a href="./about.html">À venir</a>

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

                    <input type="text" name="email" placeholder="Email" />
                    <textarea name="message" placeholder="Message"></textarea>
                    <button>Envoyer</button>

                </form>

            </div>

        </footer>
    </body>