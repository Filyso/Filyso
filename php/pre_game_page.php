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
        <form action="./solo_game.php" method="get">

            <fieldset id="checkBox">
                <div>
                    <label for="français">Français</label>
                    <input type="radio" name="langue" id="français" value="français" checked/>
                </div>

                <div>
                    <label for="anglais">Anglais</label>
                    <input type="radio" name="langue" id="anglais" value="anglais" />
                </div>

                <div>
                    <label for="Bilingue">Bilingue</label>
                    <input type="radio" name="langue" id="bilingue" value="bilingue" />
                </div>
            </fieldset>

            <fieldset>
                <div>
                    <label for="categorie">Catégorie</label>
                    <select id="categorie" name="categorie">
                        <option value="pop">Pop</option>
                        <option value="rock">Rock</option>
                        <option value="metal">Metal</option>
                        <option value="disney">Disney</option>
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
