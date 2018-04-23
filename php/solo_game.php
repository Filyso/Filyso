<?php
	header("Content-type: text/html; charset: UTF-8");
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="" content="">
    <title></title>
    <meta name="" content="">
    <link rel="" href="">

</head>

<body>
    <?php include("./main_header.php")?>
    
    <main>

        <section>
            
            <div id="photoProfil" class="photoProfil"></div>
            
            <progress id="score" class="score" value="0" max="100">Votre score</progress>

            <input type="button" value="?" id="tutoGameButton" class="tutoButton">
            
            <p id="numQuestion" class="numQuestion">N°1</p>
            
            <p id="phraseACompleter" class="phraseACompleter">Phrase à compléter</p>
            
            <input type="button" value="Réponse n°1" id="reponse1Button" class="reponse1Button">
            
            <div id="timer" class="timer"></div>
            
            <input type="button" value="Réponse n°2" id="reponse2Button" class="reponse2Button">
            
        </section>

    </main>

    <?php include("./main_footer.php")?>
</body>

</html>
