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
       
        <main>

            <section>

                <h2>Ajouter une chanson !</h2>

                <form action="" method="get">

                    <div>

                        <label for="Chanson" class="">Nom de la chanson</label>
                        <input type="text" name="Chanson" id="" class="" required="required" maxlength="75" />

                    </div>
                    <div>
                        <label for="Interprete" class="">Nom de l'interprète</label>
                        <input type="text" name="Interprete" id="" class="" required="required" maxlength="50"/>
                    </div>

                    <div>

                        <label for="Cat" class="">Catégorie</label>
                        <select id="" class="" size="1" type="text" name="Cat">

                        <option>rock
                        <option>disney
                        <option>rap
                        <option>variété française

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
                                            <input id="" type="text" name="Minutes" class="" required="required">
                                            <label for="Minutes" class="">min</label>
                                        </div>

                                        <div>
                                            <input id="" type="text" name="Secondes" class="" required="required">
                                            <label for="Secondes" class="">s</label>
                                        </div>
                                    </div>

                                    <div>
                                        <span>A</span>
                                        <div>
                                            <input id="" type="text" name="MinutesFin" class="" required="required">
                                            <label for="MinutesFin" class="">min</label>
                                        </div>

                                        <div>
                                            <input id="" type="text" name="SecondesFin" class="" required="required">
                                            <label for="SecondesFin" class="">s</label>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div>
                                <label for="Paroles" class="">Paroles</label>
                                <input id="" type="text" name="Paroles" class="" required="required">
                            </div>

                            <div>
                                <label for="Reponse0" class="">Réponse</label>
                                <input id="" type="text" name="Reponse0" class="" required="required">
                            </div>

                            <div>
                                <label class="">Autres réponses</label>
                            </div>

                            <div>

                                <div>
                                    <label for="Reponse1" class="">1</label>
                                    <input id="" type="text" name="Reponse1" class="" required="required">
                                </div>

                                <div>
                                    <label for="Reponse2" class="">2</label>
                                    <input id="" type="text" name="Reponse2" class="" required="required">
                                </div>

                                <div>
                                    <label for="Reponse3" class="">3</label>
                                    <input id="" type="text" name="Reponse3" class="" required="required">
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
