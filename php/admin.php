<?php
	header("Content-type: text/html; charset: UTF-8");
?>
    <html>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,700" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="description" content="">
        <title>Choix des options de jeu</title>
        <link rel="stylesheet" type="text/css" href="../style.css" />
    </head>

    <body>

        <?php include("./main_header.php"); ?>
        <main class="mainAdmin">
            <header class="headerAdmin">

                <div>
                    <h2>Gestion de contenu</h2>
                    <input type="button" value="Gestion de contenu" disabled="disabled" />
                    <input type="button" value="Ajout de médias" />
                    <input type="button" value="Modification/Suppression de médias" />
                </div>

                <div>
                    <h2>Gestion d'utilisateurs</h2>
                    <input type="button" value="Suppression d'utilisateurs" />
                </div>
            </header>
            
            <?php include("./add_song_admin.php"); ?>

        </main>

        <?php include("./main_footer.php"); ?>

    </body>

    </html>
