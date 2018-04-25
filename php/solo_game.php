<?php
    
	header("Content-type: text/html; charset: UTF-8");

?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>

        <meta charset="utf-8">
        <title>Jeu en Solo</title>
        <meta name="description" content="Jouez !">
        <link rel="stylesheet" type="text/css" href="../style.css" />
<?php
    if(isset($_GET["categorie"])){
     // ETAPE 1 : Se connecter au serveur de base de données
        try {
            require("./param.inc.php");
            $pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS);
            $pdo->query("SET NAMES utf8");
            $pdo->query("SET CHARACTER SET 'utf8'");
            
    // ETAPE 2 : Envoyer une requête SQL

            // conditions pour l'envoi de la requête en fonction du choix du joueur
            
            if($_GET["categorie"] != 0 && $_GET["langue"] != "bilingue"){
                // cas où la catégorie est choisie et la langue est choisie
                $requeteSQL = "SELECT APPARTIENT_A_UNE.idCat, CHANSONS.lang, CHANSONS.nameSong, ARTISTES.nameArtist, CHANSONS.linkVideo, TIMECODES.startTimeCode, TIMECODES.timeCode, TIMECODES.previousLyrics, TIMECODES.trueRep, TIMECODES.falseRep1, TIMECODES.falseRep2, TIMECODES.falseRep3 FROM CHANSONS INNER JOIN APPARTIENT_A_UNE ON CHANSONS.idSong = APPARTIENT_A_UNE.idSong INNER JOIN TIMECODES ON CHANSONS.idSong = TIMECODES.idSong INNER JOIN A_UN ON CHANSONS.idSong = A_UN.idArtist INNER JOIN ARTISTES ON A_UN.idArtist = ARTISTES.idArtist WHERE lang =:paramLangue and idCat=:paramCategorie";
                $statement = $pdo->prepare($requeteSQL);
                $statement->execute(array(":paramLangue" => $_GET["langue"],
                                          ":paramCategorie" => $_GET["categorie"]));

            } else if($_GET["categorie"] == 0 && $_GET["langue"] != "bilingue") { 
                // cas où la catégorie n'est pas choisie et la langue est choisie
                $requeteSQL = "SELECT CHANSONS.lang, CHANSONS.nameSong, ARTISTES.nameArtist, CHANSONS.linkVideo, TIMECODES.startTimeCode, TIMECODES.timeCode, TIMECODES.previousLyrics, TIMECODES.trueRep, TIMECODES.falseRep1, TIMECODES.falseRep2, TIMECODES.falseRep3 FROM CHANSONS INNER JOIN APPARTIENT_A_UNE ON CHANSONS.idSong = APPARTIENT_A_UNE.idSong INNER JOIN TIMECODES ON CHANSONS.idSong = TIMECODES.idSong INNER JOIN A_UN ON CHANSONS.idSong = A_UN.idArtist INNER JOIN ARTISTES ON A_UN.idArtist = ARTISTES.idArtist WHERE lang =:paramLangue";
                $statement = $pdo->prepare($requeteSQL);
                $statement->execute(array(":paramLangue" => $_GET["langue"]));

            } else if($_GET["categorie"] == 0 && $_GET["langue"] == "bilingue"){
                // cas où la catégorie n'est pas choisie et la langue n'est pas choisie
                $requeteSQL = "SELECT CHANSONS.nameSong, ARTISTES.nameArtist, CHANSONS.linkVideo, TIMECODES.startTimeCode, TIMECODES.timeCode, TIMECODES.previousLyrics, TIMECODES.trueRep, TIMECODES.falseRep1, TIMECODES.falseRep2, TIMECODES.falseRep3 FROM CHANSONS INNER JOIN TIMECODES ON CHANSONS.idSong = TIMECODES.idSong INNER JOIN A_UN ON CHANSONS.idSong = A_UN.idArtist INNER JOIN ARTISTES ON A_UN.idArtist = ARTISTES.idArtist";
                $statement = $pdo->query($requeteSQL);

            } else if ($_GET["categorie"] != 0 && $_GET["langue"] == "bilingue"){
                // cas où la catégorie est choisie et la langue n'est pas choisie
                $requeteSQL = "SELECT APPARTIENT_A_UNE.idCat, CHANSONS.nameSong, ARTISTES.nameArtist, CHANSONS.linkVideo, TIMECODES.startTimeCode, TIMECODES.timeCode, TIMECODES.previousLyrics, TIMECODES.trueRep, TIMECODES.falseRep1, TIMECODES.falseRep2, TIMECODES.falseRep3 FROM CHANSONS INNER JOIN APPARTIENT_A_UNE ON CHANSONS.idSong = APPARTIENT_A_UNE.idSong INNER JOIN TIMECODES ON CHANSONS.idSong = TIMECODES.idSong INNER JOIN A_UN ON CHANSONS.idSong = A_UN.idArtist INNER JOIN ARTISTES ON A_UN.idArtist = ARTISTES.idArtist WHERE idCat=:paramCategorie";
                $statement = $pdo->prepare($requeteSQL);
                $statement->execute(array(":paramCategorie" => $_GET["categorie"]));
            }
               
            $ligne = $statement->fetch(PDO::FETCH_ASSOC);
?>
        <script> 
<?php            
            while($ligne != false) {
                
                $startTime;
                $time0 = $ligne["startTimeCode"];
                $timeSegment0 = explode(":",$time0);
                $minute0 = intval($timeSegment0[1]);
                $seconde0 = intval($timeSegment0[2]);
                $startTime = 60*$minute0 + $seconde0;
                
                $endTime;
                $time1 = $ligne["timeCode"];
                $timeSegment1 = explode(":",$time1);
                $minute1 = intval($timeSegment1[1]);
                $seconde1 = intval($timeSegment1[2]);
                $endTime = 60*$minute1 + $seconde1;                                   
?>        
            
            var musique1 = new Musique(<?php echo('"'.$ligne["nameSong"].'"') ?> , <?php echo('"'.$ligne["nameArtist"].'"') ?> , "2bjk26RwjyU", <?php echo('"'.$startTime.'"') ?> , <?php echo('"'.$endTime.'"') ?> , <?php echo('"'.$ligne["previousLyrics"].'"') ?> , <?php echo('"'.$ligne["trueRep"].'"') ?> , <?php echo('"'.$ligne["falseRep1"].'"') ?> , <?php echo('"'.$ligne["falseRep2"].'"') ?> , <?php echo('"'.$ligne["falseRep3"].'"') ?>;
                
<?php
                $ligne = $statement->fetch(PDO::FETCH_ASSOC);
            }
?>
            </script>
<?php                                   
        // ETAPE 3 : Déconnecter du serveur
                                           
            $pdo = null;
        
        } catch (Exception $e){
            echo($e);
        }
                                           
    }

?>
   
    </head>

    <body>
        <?php include("./main_header.php");?>
            <main>

                <section>

                    <div class="score">

                        <figure>
                            <img alt="Photo de profil" src="../images/chat.jpg" />

                        </figure>

                        <div class="barScoreMax">
                            <div class="barScore">
                            </div>
                        </div>

                    </div>

                    <div class="contenu">

                        <div class="numEtTuto">

                            <input type="button" value="?" id="tutoButton" class="tutoButton" />

                            <p id="numQuestion" class="numQuestion">Question n°1</p>

                        </div>

                        <p id="phraseACompleter" class="phraseACompleter">Phrase à compléter</p>

                        <div class="reponses">
                            <div class="Sousreponses">
                                <input type="button" value="Réponse n°1" id="reponse1Button" class="reponseButton" />

                                <input type="button" value="Réponse n°2" id="reponse2Button" class="reponseButton" />
                            </div>
                            <div class="divTimer">
                                <p id="timer" class="timer">00</p>
                            </div>
                            <div class="Sousreponses">
                                <input type="button" value="Réponse n°3" id="reponse3Button" class="reponseButton" />

                                <input type="button" value="Réponse n°4" id="reponse4Button" class="reponseButton" />
                            </div>
                        </div>

                    </div>

                </section>

            </main>

            <?php //include("./main_footer.php");?>
    </body>

    </html>