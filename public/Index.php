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
            <div id="topIndexText">
                <h1>BONNE Morgan</h1>
                <h2>Développeur web et webdesigner</h2>
                <p>Etudiant en BUT Métier du Multimédia et de l'internet <br> à l'IUT du Puy-en-Velay</p>
            </div>
            <div id="btnCVtop">
                <a href="../img/cv.pdf">Voir CV</a>
            </div>
        </div>

    </main>

    <footer>
        <?php html_parts('footer') ?>
    </footer>


</body>

</html>