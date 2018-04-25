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
                    <form action="./admin.php" method="get">
                        <input type="submit" value="Ajout de médias" name="admin"/>
                        <input type="submit" value="Modification/Suppression de médias" name="admin"/>
                    </form>
                </div>

                <div>
                    <h2>Gestion d'utilisateurs</h2>
                    <input type="button" value="Suppression d'utilisateurs" />
                </div>
            </header>
            
            <?php 
                if (isset($_GET["admin"])) {
                    if ($_GET["admin"] == "Ajout de médias") {
                        include("./add_song_admin.php");
                    } else if ($_GET["admin"] == "Modification/Suppression de médias") {
                        include("./modify_song_admin.php");
                    } else {
                        include("./add_song_admin.php");
                    }
                } else {
                    include("./add_song_admin.php");
                }
            ?>

        </main>

        <?php include("./main_footer.php"); ?>

    </body>

    </html>
