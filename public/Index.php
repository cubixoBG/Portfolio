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
                <h2>Mon dernier <span>Projet</span></h2>
                <div id="imgProjetIndex">
                    <div class="filterCard"></div>
                    <!-- CTA Animation -->
                    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
                        type="module"></script>
                    <dotlottie-player src="https://lottie.host/e8c0a582-640a-48c6-9486-06c9c89bfc60/PtMxpRPCTP.lottie"
                        background="transparent" speed="1" style="width: 169px; height: 169px" loop
                        autoplay></dotlottie-player>
                    <!-- Reste du code -->
                    <img src="../img/site-cyberpunk.webp" alt="Illustration du projet web cyberpunk 2077">
                    <div class="hoverProjet">
                        <h3><span>Projet Cyberpunk 2077</span> / 1ère année d'étude</h3>
                        <p>Dans ce projet, j'ai du créer un site présentant une période historique, qu'elle soit
                            réelle ou fictive. J'ai alors choisi de créer un site sur le jeu vidéo Cyberpunk 2077,
                            car
                            je voulais faire un site <span>futuriste</span>. J'ai du réaliser ce site en <span>HTML,
                                CSS
                                et PHP</span> avec
                            un <span>formulaire</span>.<br> Pendant la création de se site j'ai principalement
                            améliorer
                            mes
                            <span>compétences
                                en CSS</span> avec les <span>animations</span>, mais aussi avec les
                            <span>flexbox</span>.
                        </p>
                        <a href="#">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- section de Mes competences princpales -->

        <div id="compIndex">
            <div>
                <h2>Mes <span>Compétences </span>principales</h2>
                <div class="flex-center">
                    <div id="compIndexCard">
                        <?php compIndex('webdev', 'Illustration de developpement WEB', 'Développement WEB', '"A modifier !" Je suis capable de créer un site web de A à Z en utilisant les langages HTML, CSS, JS et PHP. J\'ai aussi des compétences en SQL pour la gestion de base de données.');
                        compIndex('webdesignill', 'Illustration de design WEB', 'WebDesign', '"A modifier !" Je suis capable de créer des maquettes de site web, des logos, des chartes graphiques et des interfaces utilisateur en utilisant des outils comme Figma, Photoshop Illustrator et InDesign.');
                        compIndex('prog', 'Illustration de programmation', 'Bases en Programmation et Mobile', '"A modifier !" Je possède des bases en programmation et Algorithmie grâce a mon BUT
                            Informatique. je me suis aussi intéressé il y a peu pour le developpement Mobile avec Flutter');
                        compIndex('stratcom', 'Illustration de communication digitale', 'Communication Digitale', '"A modifier !" Je suis capable de créer des campagnes de communication digitale, de gérer des réseaux sociaux et de créer des contenus pour le web.');
                        compIndex('audiovisuel', 'Illustration de montage vidéo', 'Bases en AudioVisuel', "A modifier ! Je possède des bases en audiovisuel, ce qui me permet de réaliser des montages
                            vidéo avec DaVinci Resolve et After Effect. J'ai également développé des compétences en
                            prise de vue caméra, enregistrement et création sonore sur Logic Pro.");
                        ?>
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