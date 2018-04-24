<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="description" content="Choisissez vos options de jeu et lancer votre partie ! Sur cette page vous pouvez choisir la catégorie de hanson sur la quelle vous voulez être testé.">
    <title>Choix des options de jeu</title>
    <link rel="stylesheet" type="text/css" href="../style.css" />

</head>

<body>
    <?php include("./main_header.php"); ?>

    <main class="preGamePage">
        <h1>Sélectionnez la langue et la catégorie</h1>
        <form action="./solo_game.php" methid="post">

            <fieldset class="section">
                <div class="container">
                    
                    <input type="radio" name="langue" id="français" value="français" class="inputRadio" />
                    <label for="français"><img src="../images/FR.png" alt="drapeau français"></label>
                </div>

                <div class="container">
                    
                    <input type="radio" name="langue" id="anglais" value="anglais" class="inputRadio"/>
                    <label for="anglais"><img src="../images/UK.png" alt="drapeau anglais"></label>
                </div>

                <div class="container">
                    
                    <input type="radio" name="langue" id="bilingue" value="bilingue" class="inputR  adio"/>
                    <label for="bilingue"><img src="../images/FRUK.png" alt="drapeau bilingue"></label>
                </div>
            </fieldset>

            <fieldset>
                <div>
                    <label for="categorie">Catégorie</label>
                    <select id="categorie">
                        <option value="pop">Pop</option>
                        <option value="rock">Rock</option>
                        <option value="metal">Metal</option>
                        <option value="disney">Disney</option>
                    </select>
                </div>

                <div>
                    <button type="button">Aléatoire</button>
                </div>
            </fieldset>
            <button type="submit">Jouer</button>
        </form>
    </main>
    <?php include("./main_footer.php"); ?>
</body>

</html>
