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
                        <input type="text" name="Chanson" id="" class="" />

                    </div>
                    <div>
                        <label for="Interprete" class="">Nom de l'interprète</label>
                        <input type="text" name="Interprete" id="" class="" />
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
                        <input type="url" name="URL" id="" class="" />

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
                                            <input id="" type="text" name="Minutes" class="">
                                            <label for="Minutes" class="">min</label>
                                        </div>

                                        <div>
                                            <input id="" type="text" name="Secondes" class="">
                                            <label for="Secondes" class="">s</label>
                                        </div>
                                    </div>

                                    <div>
                                        <span>A</span>
                                        <div>
                                            <input id="" type="text" name="MinutesFin" class="">
                                            <label for="MinutesFin" class="">min</label>
                                        </div>

                                        <div>
                                            <input id="" type="text" name="SecondesFin" class="">
                                            <label for="SecondesFin" class="">s</label>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div>
                                <label for="Paroles" class="">Paroles</label>
                                <input id="" type="text" name="Paroles" class="">
                            </div>

                            <div>
                                <label for="Reponse0" class="">Réponse</label>
                                <input id="" type="text" name="Reponse0" class="">
                            </div>

                            <div>
                                <label class="">Autres réponses</label>
                            </div>

                            <div>

                                <div>
                                    <label for="Reponse1" class="">1</label>
                                    <input id="" type="text" name="Reponse1" class="">
                                </div>

                                <div>
                                    <label for="Reponse2" class="">2</label>
                                    <input id="" type="text" name="Reponse2" class="">
                                </div>

                                <div>
                                    <label for="Reponse3" class="">3</label>
                                    <input id="" type="text" name="Reponse3" class="">
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
