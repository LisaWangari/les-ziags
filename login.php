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
        <meta name="google-signin-scope" content="profile email">

        <title>Hôtel Les Ziags | Connectez-vous</title>

        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- STYLES -->
        <!-- CSS -->
        <link href="content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="content/css/login.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" />
        <!--[if IE]>
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <![endif]-->

        <!-- SCRIPTS -->

        <!-- Libraries -->
        <script type="text/javascript" src="/content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="/content/js/modernizr-3.3.1.min.js"></script>
        <!-- Facebook Login script -->
        <script type="text/javascript" src="/content/js/fbLogin.js"></script>
        <!-- Google API & script -->
        <script type="text/javascript" src="https://apis.google.com/js/platform.js" async defer></script>
        <script type="text/javascript" src="https://apis.google.com/js/api:client.js"></script>
        <script type="text/javascript" src="/content/js/gplusLogin.js"></script>

    </head>

    <body>

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Header -->
            <?php include 'view/headerView.php'; ?>

            <!-- Content -->
            <div class="content login">
                <!-- Login with... social buttons -->
                <section class="login__social-buttons">
                    <div class="container">
                        <a href="#" title="Se connecter avec Facebook" class="login__social-button" id="login__social-button__facebook" onclick="fb_login();">
                            <img src="/content/img/icons/facebook-letter-logo_24px_white.png" alt="login-with-facebook" />
                            <p>Se connecter avec Facebook</p>
                        </a>

                        <!--
                            Google Plus button following the branding guidelines
                            https://developers.google.com/+/branding-guidelines
                        -->
                        <a href="#" title="Se connecter avec Google" class="login__social-button" id="login__social-button__google">
                            <img src="/content/img/icons/google-plus_24px_white.png" alt="login-with-google" />
                            <p>Se connecter avec Google</p>
                        </a>
                    </div>
                </section>

                <!-- Sign in and sign up forms -->
                <section class="login__forms">

                    <!-- Signin form -->
                    <div class="container">
                        <form action="" method="post" id="login__form-signin">
                            <h5>Se connecter</h5>
                            <div class="input-container input-container-username"><input type="text" placeholder="Email / Nom d'utilisateur" name="username" /></div>
                            <div class="input-container input-container-password"><input type="password" placeholder="Mot de passe" name="password" /></div>
                            <a href="/">Mot de passe oublié ?</a>
                            <button class="button-submit">Se connecter</button>
                        </form>
                    </div>

                    <!-- Signup form -->
                    <div class="container">
                        <form action="" method="post" id="login__form-signup">
                            <h5>Pas encore inscrit ?</h5>
                            <h3>Créer un compte</h3>
                            <input type="text" placeholder="Nom" name="firstname" />
                            <input type="text" placeholder="Prénom" name="lastname" />
                            <input type="email" placeholder="Email" name="email" pattern="[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?" oninput="try {if ($(this).val().match(new RegExp(this.getAttribute('pattern')))) { this.setCustomValidity(''); } else { this.setCustomValidity('Veuillez entrer une adresse valide'); }} catch(e) {}" /><br />
                            <button class="button-submit">S'inscrire</button>
                        </form>
                    </div>
                </section>
            </div>

            <!-- Footer -->
            <?php include 'view/footerView.php'; ?>
        </div>

        <script type="text/javascript" src="/content/js/script.js"></script>

        <!-- Google Login function -->
        <script type="text/javascript">startApp();</script>
    </body>
</html>
