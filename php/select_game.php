<?php
	header("Content-type: text/html; charset: UTF-8");
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">

        <meta charset="utf-8">
        <meta http-equiv="" content="">
        <title></title>
        <meta name="" content="">
        <link rel="stylesheet" href="style.css">
        <link rel="stylecheet" href="selec_game.css">
    </head>

    <body>
       <?php include("./main_header.php")?>
        <main class="mainSelect">
            <h1>Choisir le mode de jeu</h1>
            <div>
                <a href="">MULTI</a>
                <p>Jouez en ligne contre d'autres personnes.</p>
            </div>
            <div>
                <a href="/php/pre_game_page.php">SOLO<br>Jouez seul pour vous entraîner.</a>
                <p>Jouez seul pour vous entraîner.</p>
            </div>

        </main>
        <?php include("./main_footer.php")?>
    </body>

    </html>