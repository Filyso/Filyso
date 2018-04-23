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
        <?php include("main_header.php")?>
        
        <main>

            <section>

                <h2>Ajouter une chanson !</h2>

                <form action="" method="post">

                    <div>

                        <label for="Chanson" class="">Nom de la chanson</label>
                        <input type="text" name="Chanson" id="" class="" required="required" maxlength="75" />

                    </div>
                    <div>
                        <label for="Interprete" class="">Nom de l'interprète</label>
                        <input type="text" name="Interprete" id="" class="" required="required" maxlength="50" />
                    </div>

                    <div>

                        <label for="Cat" class="">Catégorie</label>
                        <select id="" class="" size="1" type="text" name="Cat">
                        
                        <option value="">Choisissez une catégorie</option>
                        <?php
                            // ETAPE 1 : Se connecter au serveur de base de données
                                require("./param.inc.php");
                                $pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDB, MYUSER, MYPASS);
                                $pdo->query("SET NAMES utf8");
                                $pdo->query("SET CHARACTER SET 'utf8'");

                            // ETAPE 2 : Envoyer une requête SQL (demander la liste des données)
                                $requeteSQL = "SELECT nameCat FROM CATEGORIES";
                                $statement = $pdo->query($requeteSQL);

                            // Boucle sur chaque auteur
                            // ETAPE 3 : Traiter les données retourner
                                // Premier auteur
                                $ligne = $statement->fetch(PDO::FETCH_ASSOC);
                                while($ligne != false) {
                        ?>
                            <option value="<?php echo($ligne["nameCat"]);?>"><?php echo($ligne["nameCat"]);?></option>
                            
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

                        <label for="URL" class="">URL</label>
                        <input type="url" name="URL" id="" class="" required="required" />

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
                                            <input id="" type="number" name="Minutes" class="" required="required" min="0" max="10">
                                            <label for="Minutes" class="">min</label>
                                        </div>

                                        <div>
                                            <input id="" type="number" name="Secondes" class="" required="required" min="00" max="59">
                                            <label for="Secondes" class="">s</label>
                                        </div>
                                    </div>

                                    <div>
                                        <span>A</span>
                                        <div>
                                            <input id="" type="number" name="MinutesFin" class="" required="required" min="0" max="10">
                                            <label for="MinutesFin" class="">min</label>
                                        </div>

                                        <div>
                                            <input id="" type="number" name="SecondesFin" class="" required="required" min="00" max="59">
                                            <label for="SecondesFin" class="">s</label>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div>
                                <label for="Paroles" class="">Paroles</label>
                                <input id="" type="text" name="Paroles" class="" required="required" maxlength="100">
                            </div>

                            <div>
                                <label for="Reponse0" class="">Réponse</label>
                                <input id="" type="text" name="Reponse0" class="" required="required" maxlength="75">
                            </div>

                            <div>
                                <label class="">Autres réponses</label>
                            </div>

                            <div>

                                <div>
                                    <label for="Reponse1" class="">1</label>
                                    <input id="" type="text" name="Reponse1" class="" required="required" maxlength="75">
                                </div>

                                <div>
                                    <label for="Reponse2" class="">2</label>
                                    <input id="" type="text" name="Reponse2" class="" required="required" maxlength="75">
                                </div>

                                <div>
                                    <label for="Reponse3" class="">3</label>
                                    <input id="" type="text" name="Reponse3" class="" required="required" maxlength="75">
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
