<?php
	header("Content-type: text/html; charset: UTF-8");
?>
<head>
    <link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
</head>

<body>
    <?php include("./main_header.php"); ?>
    <main>
        <div class="equipe">
            <h2>Notre équipe</h2>
            <div class="lesPhotos">
                <figure class="unePhoto">
                    <img src="photo de ..." alt="Photo de Yoan">
                    <figcaption>
                        <h3>Yoan</h3> blablabla
                    </figcaption>
                </figure>
                <figure class="unePhoto">
                    <img src="photo de ..." alt="Photo de Vincent">
                    <figcaption>
                        <h3>Vincent</h3> blablabla
                    </figcaption>
                </figure>
                <figure class="unePhoto">
                    <img src="photo de ..." alt="Photo de Tristan">
                    <figcaption>
                        <h3>Tristan</h3> blablabla
                    </figcaption>
                </figure>
                <figure class="unePhoto">
                    <img src="photo de ..." alt="Photo de Clément">
                    <figcaption>
                        <h3>Clément</h3> blablabla
                    </figcaption>
                </figure>
                <figure class="unePhoto">
                    <img src="photo de ..." alt="Photo de Justine">
                    <figcaption>
                        <h3>Justine</h3> blablabla
                    </figcaption>
                </figure>
                <figure class="unePhoto">
                    <img src="photo de ..." alt="Photo de Maxime">
                    <figcaption>
                        <h3>Maxime</h3> blablabla
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="BoiteAIdee">
            <h2>Contactez-nous</h2>
            <p>blablabla</p>
            <form action="#" method="post">
                <input type="text" name="email" placeholder="Email" />
                <textarea name="message" placeholder="Message"></textarea>
                <button>Envoyer</button>
            </form>

        </div>
        <div class="AVenir">
            <h2>Prochainement sur Filyso</h2>
            <p>blablabla</p>
        </div>
    </main>
    <?php include("./main_footer.php"); ?>
</body>

</html>