<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="description" content="Choisissez vos options de jeu et lancer votre partie ! Sur cette page vous pouvez choisir la catégorie de hanson sur la quelle vous voulez être testé.">
    <title>Choix des options de jeu</title>
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <script type="text/javascript" src="../solo_game_test.js"></script>
</head>

<body>
    <?php include("./main_header.php"); ?>

    <main class="preGamePage">
        <h1>Sélectionnez la langue et la catégorie</h1>
        <form action="./solo_game.php" method="post">

            <fieldset class="section" >
                <div class="container">
                    
                    <input type="radio" name="langue" id="français" value="fr" class="inputRadio" required />
                    <label for="français"><img src="../images/FR.png" alt="drapeau français"></label>
                </div>

                <div class="container">
                    
                    <input type="radio" name="langue" id="anglais" value="en" class="inputRadio"/>
                    <label for="anglais"><img src="../images/UK.png" alt="drapeau anglais"></label>
                </div>

                <div class="container">
                    
                    <input type="radio" name="langue" id="bilingue" value="bilingue" class="inputRadio" checked/>
                    <label for="bilingue"><img src="../images/FRUK.png" alt="drapeau bilingue"></label>
                </div>
            </fieldset>

            <fieldset>
                <div>
                    <label for="categorie">Catégorie</label>
                    <select id="categorie">
                        <option value="0">Toutes les catégories</option>
                        <option value="1">Pop</option>
                        <option value="2">Rock</option>
                        <option value="3">Metal</option>
                        <option value="4">Disney</option>
                    </select>
                </div>

                <div>
                    <button id="btnAlea" type="button">Aléatoire</button>
                </div>
            </fieldset>
            <button type="submit">Jouer</button>
        </form>
    </main>
    <?php include("./main_footer.php"); ?>
</body>

</html>
