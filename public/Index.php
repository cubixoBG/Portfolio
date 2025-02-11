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

        <div id="topIndex">
            <div id="topTitleIndex">
                <div id="topIndexText">
                    <h1><span>BONNE</span> Morgan</h1>
                    <h2><span>Développeur</span> web & web<span>designer</span></h2>
                    <p>Etudiant en BUT Métier du Multimédia et de l'internet <br> à l'IUT du <span>Puy-en-Velay</span>
                    </p>
                    <div id="nbAnnee">
                    <p><span>1</span>ère Année</p></div>
                </div>
                <div id="btnCVtop">
                    <a href="../img/cv.pdf" target="_blank">Voir CV</a>
                </div>
            </div>
        </div>

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

        <script>
            var copy = document.querySelector('#logo-slide').cloneNode(true);
            document.querySelector('#logoSlider').appendChild(copy);
        </script>

    </main>

    <footer>
        <?php html_parts('footer') ?>
    </footer>


</body>

</html>