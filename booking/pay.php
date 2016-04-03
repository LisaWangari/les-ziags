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
        <title>Hôtel Les Ziags | Réservation | Paiement </title>
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
            <div class="content booking booking-pay">
                <div class="content-overlay">

                    <!-- Steps progression -->
                    <?php include '../view/bookingProgressionView.php' ?>

                    <!-- Form -->
                    <div class="container container-main">
                        <form action="" method="post">
                            <table>
                                <tr class="booking-payment-method-container">
                                    <td class="booking-payment-method">
                                        <input type="radio" name="payment-method" value="credit-card" id="booking-payment-method-credit-card" required /><label for="booking-payment-method-credit-card"><img src="/content/img/icons/credit-cards-payment_64px_white.png" /></label>
                                    </td>
                                    <td class="booking-payment-method">
                                        <input type="radio" name="payment-method" value="paypal" id="booking-payment-method-paypal"><label for="booking-payment-method-paypal"><img src="/content/img/icons/paypal-logo_64px_white.png" /></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="input-container input-container-credit-card-number"><input type="number" name="credit-card-number" placeholder="Numéro de carte" maxlength="16" class="booking-payment-credit-card-number" pattern="[0-9]{16}" oninput="try {if ($(this).val().match(new RegExp(this.getAttribute('pattern')))) { this.setCustomValidity(''); } else { this.setCustomValidity('Veuillez entrer un numéro de carte valide'); }} catch(e) {}" required /></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="input-container input-container-date"><input type="text" name="credit-card-expiry-date" placeholder="MM/AA" pattern="[0-3][0-9]/[0-9]{2}" oninput="try {if ($(this).val().match(new RegExp(this.getAttribute('pattern')))) { this.setCustomValidity(''); } else { this.setCustomValidity('Veuillez entrer une date d\'expiration valide'); }} catch(e) {}" required /></div>
                                    </td>
                                    <td>
                                        <div class="input-container input-container-password"><input type="password" name="credit-card-tag" placeholder="Code de sécurité" maxlength="4" required /></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="input-container input-container-user"><input type="text" name="credit-card-owner" placeholder="Nom du titulaire" class="booking-payment-credit-card-owner" required /></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="booking-payment-agreement-container">
                                        <input type="checkbox" id="booking-payment-agreement" /><label for="booking-payment-agreement">  J'accepte les <a href="#">Conditions Générales de Vente</a></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="/booking/stay" class="button-return">&lt; Retour</a>
                                    </td>
                                    <td>
                                        <button class="button-submit">Confirmer</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <?php include '../view/footerView.php'; ?>
        </div>

        <script type="text/javascript" src="/content/js/script.js"></script>

    </body>
</html>
