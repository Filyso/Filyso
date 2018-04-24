<?php
	header("Content-type: text/html; charset: UTF-8");
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <title>Jeu en Solo</title>
    <meta name="description" content="Jouez !">
    <link rel="stylesheet" type="text/css" href="../style_jeu_solo.css"/>

</head>

<body>
    <?php include("./main_header.php");?>
    
    <main>

        <section>
            
            <div class="score">
            
                <figure>
                    <img alt="Photo de profil" src="../images/chat.jpg"/>
                </figure>
                
                <div class="barScoreMax">
                    <div class="barScore">
                    </div>
                </div>
            
            </div>
            
            <div class="contenu">
                
                <div class="numEtTuto">

                    <input type="button" value="?" id="tutoButton" class="tutoButton"/>
            
                    <p id="numQuestion" class="numQuestion">Question n°1</p>
                    
                </div>
            
                <p id="phraseACompleter" class="phraseACompleter">Phrase à compléter</p>
                
                <div class="reponses">
                    <div class="Sousreponses">
                        <input type="button" value="Réponse n°1" id="reponse1Button" class="reponseButton"/>

                        <input type="button" value="Réponse n°2" id="reponse2Button" class="reponseButton"/>
                    </div>
                        <div class="divTimer">
                            <p id="timer" class="timer">00</p>
                        </div>
                    <div class="Sousreponses">
                        <input type="button" value="Réponse n°3" id="reponse3Button" class="reponseButton"/>

                        <input type="button" value="Réponse n°4" id="reponse4Button" class="reponseButton"/>
                    </div>
                </div>
                
            </div>
            
        </section>

    </main>

    <?php //include("./main_footer.php");?>
</body>

</html>
