<?php
	header("Content-type: text/html; charset: UTF-8");

    if(isset($_POST["song"])) {
        // ETAPE 1 : Se connecter au serveur de base de données
            require("./param.inc.php");
            $pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS);
            $pdo->query("SET NAMES utf8");
            $pdo->query("SET CHARACTER SET 'utf8'");

        // ETAPE 2 : Envoyer une requête SQL
            // AJOUT CHANSON
            $requeteSQL = "INSERT INTO CHANSONS(nameSong, linkVideo, lang, idMbr) VALUES (:paramNameSong, :paramLinkVideo, :paramLangSong, NULL)";
            $statement = $pdo->prepare($requeteSQL);
            $statement->execute(array(":paramNameSong" => $_POST["song"],
                                      ":paramLinkVideo" => $_POST["linkVideo"],
                                      ":paramLangSong" => $_POST["langSong"]));
        
            // Récupération idSong
            $requeteSQL = "SELECT LAST_INSERT_ID() AS idSong";
            $statement = $pdo->query($requeteSQL);
            $ligne = $statement->fetch(PDO::FETCH_ASSOC);
            $idSong = $ligne["idSong"];
            
            echo $idSong;
            
            $requeteSQL = "INSERT INTO APPARTIENT_A_UNE(idSong, idCat) VALUES (" . $idSong . ", :paramCatSong)";
            $statement = $pdo->prepare($requeteSQL);
            $statement->execute(array(":paramCatSong" => $_POST["catSong"]));
        
            // AJOUT TIMECODE
            $timeCode = "00:" . ($_POST["minEnd"]>9 ? ($_POST["minEnd"]):("0" . $_POST["minEnd"])) . ":" . ($_POST["secEnd"]>9 ? ($_POST["secEnd"]):("0" . $_POST["secEnd"]));
            $requeteSQL = "INSERT INTO TIMECODES(timeCode,previousLyrics,trueRep,falseRep1,falseRep2,falseRep3,idSong) VALUES ('" . $timeCode . "', :paramPrevLyrics, :paramGoodRep, :paramBadRep1, :paramBadRep2, :paramBadRep3," . $idSong . ")";
            $statement = $pdo->prepare($requeteSQL);
            $statement->execute(array(":paramPrevLyrics" => $_POST["prevLyrics"],
                                      ":paramGoodRep" => $_POST["goodRep"],
                                      ":paramBadRep1" => $_POST["badRep1"],
                                      ":paramBadRep2" => $_POST["badRep2"],
                                      ":paramBadRep3" => $_POST["badRep1"],));
        
            // GESTION AUTEUR
            $requeteSQL = "SELECT idArtist, nameArtist FROM ARTISTES WHERE nameArtist='" . $_POST["artistSong"] . "'";
            echo("SELECT idArtist, nameArtist FROM ARTISTES WHERE nameArtist=" . $_POST["artistSong"] . "'");
            $statement = $pdo->query($requeteSQL);
            $ligne = $statement->fetch(PDO::FETCH_ASSOC);
            echo("BBBonjour");
            if($ligne != false) {
                $requeteSQL = "INSERT INTO A_UN(idSong, idArtist) VALUES (" . $idSong . ", " . $ligne["idArtist"] . ")";
                $statement = $pdo->query($requeteSQL);
            } else {
                $requeteSQL = "INSERT INTO ARTISTES(nameArtist) VALUES (:paramArtistSong)";
                $statement = $pdo->prepare($requeteSQL);
                $statement->execute(array(":paramArtistSong" => $_POST["artistSong"]));
                
                $requeteSQL = "INSERT INTO A_UN(idSong, idArtist) VALUES (" . $idSong . ", LAST_INSERT_ID())";
                $statement = $pdo->query($requeteSQL);
            }
                        
        // ETAPE 3 : Déconnecter du serveur
            $pdo = null;
    }
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
        <?php include("main_header.php");?>
        <main>

            <section>

                <h2>Ajouter une chanson !</h2>

                <form action="add_song_admin.php" method="post">

                    <div>

                        <label for="song" class="">Nom de la chanson</label>
                        <input type="text" name="song" id="song" class="" required="required" maxlength="75" />

                    </div>
                    <div>
                        <label for="artistSong" class="">Nom de l'interprète</label>
                        <input type="text" name="artistSong" id="artistSong" class="" required="required" maxlength="50" />
                    </div>

                    <div>

                        <label for="catSong" class="">Catégorie</label>
                        <select id="catSong" class="" size="1" type="text" name="catSong">
                        
                            <option value="">Choisissez une catégorie</option>
                            <?php
                                // ETAPE 1 : Se connecter au serveur de base de données
                                    require("./param.inc.php");
                                    $pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS);
                                    $pdo->query("SET NAMES utf8");
                                    $pdo->query("SET CHARACTER SET 'utf8'");

                                // ETAPE 2 : Envoyer une requête SQL (demander la liste des données)
                                    $requeteSQL = "SELECT idCat, nameCat FROM CATEGORIES";
                                    $statement = $pdo->query($requeteSQL);

                                // Boucle sur chaque auteur
                                // ETAPE 3 : Traiter les données retourner
                                    // Premier auteur
                                    $ligne = $statement->fetch(PDO::FETCH_ASSOC);
                                    while($ligne != false) {
                            ?>
                            <option value="<?php echo($ligne["idCat"]);?>"><?php echo($ligne["nameCat"]);?></option>
                            
                            <?php
                                        $ligne = $statement->fetch(PDO::FETCH_ASSOC);
                                    }
                                // Fin de la boucle
                                // ETAPE 4 : Déconnecter du serveur
                                    $pdo = null;
                            ?>

                        </select>

                    </div>
                    <div>

                        <span>Langue</span>
                        
                        <input type="radio" id="langSongFR" name="langSong" value="fr">
                        <label for="langSongFR">FR</label>
                        
                        <input type="radio" id="langSongEN" name="langSong" value="en">
                        <label for="langSongEN">EN</label>


                    </div>

                    <div>

                        <label for="linkVideo" class="">URL</label>
                        <input type="url" name="linkVideo" id="linkVideo" class="" required="required" />

                    </div>

                    <div>

                        <div class="">

                            <div>

                                <div>
                                    <label for="Time" class="">Timecode</label>
                                </div>

                                <!-- De tant de minutes à tant de minutes ???? -->
                                <div>
                                    <div>
                                        <span>De</span>
                                        <div>
                                            <input id="minStart" type="number" name="minStart" class="" required="required" min="0" max="10">
                                            <label for="minStart" class="">min</label>
                                        </div>

                                        <div>
                                            <input id="secStart" type="number" name="secStart" class="" required="required" min="00" max="59">
                                            <label for="secStart" class="">s</label>
                                        </div>
                                    </div>

                                    <div>
                                        <span>A</span>
                                        <div>
                                            <input id="minEnd" type="number" name="minEnd" class="" required="required" min="0" max="10">
                                            <label for="minEnd" class="">min</label>
                                        </div>

                                        <div>
                                            <input id="secEnd" type="number" name="secEnd" class="" required="required" min="00" max="59">
                                            <label for="secEnd" class="">s</label>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div>
                                <label for="prevLyrics" class="">Paroles</label>
                                <input id="prevLyrics" type="text" name="prevLyrics" class="" required="required" maxlength="100">
                            </div>

                            <div>
                                <label for="goodRep" class="">Réponse</label>
                                <input id="goodRep" type="text" name="goodRep" class="" required="required" maxlength="75">
                            </div>

                            <div>
                                <label class="">Autres réponses</label>
                            </div>

                            <div>

                                <div>
                                    <label for="badRep1" class="">1</label>
                                    <input id="badRep1" type="text" name="badRep1" class="" required="required" maxlength="75">
                                </div>

                                <div>
                                    <label for="badRep2" class="">2</label>
                                    <input id="badRep2" type="text" name="badRep2" class="" required="required" maxlength="75">
                                </div>

                                <div>
                                    <label for="badRep3" class="">3</label>
                                    <input id="badRep3" type="text" name="badRep3" class="" required="required" maxlength="75">
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="button">
                        <button type="submit" class="bouton">Ajouter</button>
                        <button type="reset" class="bouton">Annuler</button>
                    </div>

                </form>

            </section>

        </main>

        <?php include("./main_footer.php")?>
    </body>

    </html>
