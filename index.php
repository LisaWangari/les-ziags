<!DOCTYPE html>

<!--
    ╭──────────────────────────────────────────╮
    │ ≡ Design & Front-end                     │
    ╞══════════════════════════════════════════╡
    │                                          │
    │ EVAN SUAU                                │
    ├──────────┬───────────────────────────────┤
    │ Email    │ evan.suau@etu.u-pec.fr        │
    ├──────────┼───────────────────────────────┤
    │ Location │ Sucy-en-Brie, FR              │
    ╰──────────┴───────────────────────────────╯

    ╭──────────────────────────────────────────╮
    │ ≡ Back-end                               │
    ╞══════════════════════════════════════════╡
    │                                          │
    │ ALEX BENOIT                              │
    ├──────────┬───────────────────────────────┤
    │ Email    │ ben75.alex@gmail.com          │
    ├──────────┼───────────────────────────────┤
    │ Location │ Paris, FR                     │
    ╰──────────┴───────────────────────────────╯
-->

<html lang="fr">
    <head>

        <!-- META -->
        <meta charset="utf-8" />
        <title>Hôtel Les Ziags | Accueil</title>
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- STYLES -->
        <!-- CSS -->
        <link href="content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="content/css/home.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" />
        <!--[if IE]>
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <![endif]-->

        <script type="text/javascript" src="content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="content/js/modernizr-3.3.1.min.js"></script>
    </head>

    <body>

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Header -->
            <?php include 'view/headerView.php'; ?>

            <!-- Content -->
            <div class="content home">
                <div class="content-overlay">
                    <div class="container container-main">
                        <div class="home-title">
                            <img src="/content/img/icons/favourite-symbol_64px_white.png" />
                            <img src="/content/img/icons/favourite-symbol_64px_white.png" />
                            <img src="/content/img/icons/favourite-symbol_64px_white.png" />
                            <h1 id="home-title-welcome">BIENVENUE</h1>
                            <h1 id="home-title-hotel">À L'HÔTEL</h1>
                            <h1 id="home-title-les-ziags">LES ZIAGS</h1>
                        </div>
                        <table>
                            <tr>
                                <td>
                                    <div class="card">
                                        <h2>Une accueil de qualité</h2>
                                        <p>
                                            L'Hôtel Les Ziags propose 12 chambres à la décoration moderne et aux équipements fonctionnels et de qualité. Elles sont transformables à votre convenance en véritables salles de réunion.
                                        </p>
                                        <a href="/bedrooms"><button class="button-submit">Voir nos chambres</button></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="card">
                                        <h2>Des services premium</h2>
                                        <p>
                                            Connexion WiFi gratuite et illimitée depuis votre chambre et tous les espaces communs de l'hôtel, service petit-déjeuner en chambre de 6h30 à 12h... Profitez de services premium durant votre séjour.
                                        </p>
                                        <a><button class="button-submit">Voir nos services</button></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="card">
                                        <h2>Des prix abordables</h2>
                                        <p>
                                            L'Hôtel Les Ziags propose des tarifs abordables, à partir de 20€ la nuit, à deux pas de la capitale... Inscrivez-vous et profitez de nos offres spéciales !
                                        </p>
                                        <a href="/booking/stay"><button class="button-submit">Consulter nos tarifs</button></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include 'view/footerView.php'; ?>
        </div>
        <script type="text/javascript" src="content/js/script.js"></script>
    </body>
</html>
