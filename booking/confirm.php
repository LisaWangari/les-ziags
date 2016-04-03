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
        <title>Hôtel Les Ziags | Réservation | Connectez-vous</title>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- STYLES -->
        <!-- CSS -->
        <link href="/content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/content/css/booking.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico" />
        <!--[if IE]>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <![endif]-->

        <script type="text/javascript" src="/content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="/content/js/modernizr-3.3.1.min.js"></script>

    </head>

    <body>

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Header -->
            <?php include '../view/headerView.php'; ?>

            <!-- Content -->
            <div class="content booking booking-confirm">
                <div class="content-overlay">

                    <!-- Steps progression -->
                    <?php include '../view/bookingProgressionView.php' ?>

                    <!-- Container -->
                    <div class="container container-main">
                        <h1>Votre réservation a bien été prise en compte.</h1>
                        <h2>Merci pour votre confiance :)</h2>

                        <table>
                            <tr class="booking-confirm-description">
                                <td rowspan="4">
                                    <img src="/content/img/illustrations/double-room.png" />
                                </td>
                                <td>
                                    <h3>CHAMBRE DOUBLE</h3>
                                </td>
                                <td rowspan="4" class="booking-confirm-price">
                                    <p>Prix TTC</p>
                                    <h1>50.00 EUR</h1>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="booking-confirm-checked">Voyage d'affaire</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="booking-confirm-checked">Demi-pension</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="booking-confirm-checked">Avec salle de bain</p>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr class="booking-confirm-description">
                                <td rowspan="4">
                                    <img src="/content/img/illustrations/single-room.png" />
                                </td>
                                <td>
                                    <h3>CHAMBRE SIMPLE</h3>
                                </td>
                                <td rowspan="4" class="booking-confirm-price">
                                    <p>Prix TTC</p>
                                    <h1>30.00 EUR</h1>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="booking-confirm-checked">Voyage d'affaire</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="booking-confirm-checked">Demi-pension</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="booking-confirm-unchecked">Avec salle de bain</p>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <?php include '../view/footerView.php'; ?>
        </div>

        <script type="text/javascript" src="/content/js/script.js"></script>
        <script type="text/javascript" src="/content/js/datePicker.js"></script>

    </body>
</html>
