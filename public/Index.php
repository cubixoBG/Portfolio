<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="BONNE Morgan">
    <meta name="Description" content="Site web Portfolio de BONNE Morgan">
    <meta name="Key-words"
        content="Portfolio, BONNE, Morgan, Développeur, Web, PHP, HTML, CSS, JS, SQL, dev, graphiste, designer, webdesigner, graphisme, design, webdesign, web, site, internet, webmaster, webmastering, webmastering, webmaster, entreprise, association, particulier, professionnel, freelance, indépendant, auto-entrepreneur, autoentrepreneur, auto entrepreneur, auto-entrepreneur, entrepreneur, english, anglais, french, français, developer, web, PHP, HTML, CSS, JS, SQL, dev, graphic designer, designer, webdesigner, graphic design, design, webdesign, web, site, internet, webmaster, webmastering, webmastering, webmaster, company, association, individual, professional, freelance, independent, self-employed, selfemployed, self employed, self-employed">
    <title>Bienvenue à vous</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/png" href="../img/favicon.ico">
    <?php include('../bootstrap.php') ?>
</head>

<body>
    <header>
        <?php html_parts('header') ?>
    </header>

    <main>
        <!-- Section de présentation / haut de page  -->

        <div id="topIndex">
            <div id="topTitleIndex">
                <div id="topIndexText">
                    <h1><span>BONNE</span> Morgan</h1>
                    <h2><span>Développeur</span> web & web<span>designer</span></h2>
                    <p>Etudiant en BUT Métier du Multimédia et de l'internet <br> à l'IUT du <span>Puy-en-Velay</span>
                    </p>
                    <div id="nbAnnee">
                        <p><span>1</span>ère Année</p>
                    </div>
                </div>
                <div id="btnCVtop">
                    <a href="../img/cv.pdf" target="_blank">Voir CV</a>
                </div>
            </div>
        </div>

        <!-- Slider de logos  -->
        <div id="logoSlider">
            <div id="logo-slide">
                <?php
                imgSlider('html', 'logo html');
                imgSlider('css', 'logo css');
                imgSlider('js', 'logo javascript');
                imgSlider('php', 'logo php');
                imgSlider('SQL', 'logo sql');
                imgSlider('vs', 'logo visual studio code');
                imgSlider('flutter', 'logo flutter');
                imgSlider('figma', 'logo figma');
                imgSlider('photoshop', 'logo photoshop');
                imgSlider('illustrator', 'logo illustrator');
                imgSlider('indesign', 'logo indesign');
                imgSlider('ae', 'logo after effect');
                imgSlider('davinci', 'logo davinci resolve');
                ?>
            </div>
        </div>
        <!-- Duplication du slider -->
        <script>
            var copy = document.querySelector('#logo-slide').cloneNode(true);
            document.querySelector('#logoSlider').appendChild(copy);
        </script>

        <!-- Illustration d'un projet -->

        <div id="presProjetIndex">
            <div class="flex-center">
                <h2>Mon dernier Projet</h2>
                <div id="imgProjetIndex">
                    <div class="filterCard"></div>
                    <img src="../img/site-cyberpunk.webp" alt="Illustration du projet web cyberpunk 2077">
                    <div class="hoverProject">
                        <h3><span>Projet Cyberpunk 2077</span> / 1ère année d'étude</h3>
                        <p>Dans ce projet, j'ai du créer un site présentant une période historique, qu'elle soit
                            réelle ou fictive. J'ai alors choisi de créer un site sur le jeu vidéo Cyberpunk 2077, car
                            je voulais faire un site futuriste. J'ai du réaliser ce site en HTML, CSS et PHP avec
                            un formulaire. Pendant la création de se site j'ai principalement améliorer mes compétences
                            en css avec les animations, mais aussi avec ls flexbox.</p>
                        <a href="projets.php">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <?php html_parts('footer') ?>
    </footer>


</body>

</html>