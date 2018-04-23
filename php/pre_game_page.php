<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="description" content="Choisissez vos options de jeu et lancer votre partie ! Sur cette page vous pouvez choisir la catégorie de hanson sur la quelle vous voulez être testé.">
        <title>Choix des options de jeu</title>
        <link rel="stylesheet" type="text/css" href="style.css" />

    </head>
    <body>
        <?php include("./main_header.php"); ?>
        <from action="" methid="post">
            
            <label for="français">français</label>
            <input type="radio" name="langue" id="français" value="français"/>
            
            <label for="anglais">anglais</label>
            <input type="radio" name="langue" id="anglais" value="anglais"/>
            
            
            <select id="categorie">
                <option value="pop">pop</option>
                <option value="rock">rock</option>
                <option value="metal">metal</option>
                <option value="disney">disney</option>
            </select>

            <button type="submit">Envoyer</button>
            
        </from>
        <?php include("./main_footer.php"); ?>
    </body>
</html>