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
        <link href="/content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="/content/css/account.css" rel="stylesheet" type="text/css" media="screen" />
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
            <div class="content home">
                <div class="content-overlay">
                    <div class="container container-main tabs">
                        <ul class="tab-links">
                            <li class="active"><a href="#tab1">Profil</a></li>
                            <li><a href="#tab2">Modifier</a></li>
                            <li><a href="#tab3">Sécurité</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab1" class="tab active">
                                <figure class="user-avatar-container">
                                    <?php echo user_avatar($client_infos['client_idclient'], $client_infos['client_gender']) ?>
                                    <figcaption><?php echo $client_infos['client_firstname']." ".$client_infos['client_lastname']; ?></figcaption>
                                </figure>
                                <div class="tab-container">
                                    <table>
                                        <tr>
                                            <td class="user-info-section">Email</td>
                                            <td><?php echo '<a href="mailto:'.$client_infos['client_mail'].'" target="_blank">'.$client_infos['client_mail'].'</a>' ?></td>
                                        </tr>
                                        <tr>
                                            <td class="user-info-section">Adresse</td>
                                            <td>
                                                <?php echo $client_infos['client_streetnumber'].", ".htmlspecialchars($client_infos['client_street'], ENT_QUOTES, 'UTF-8', true); ?><br/>
                                                <?php echo $client_infos['client_zipcode']." ".$client_infos['client_city']; ?><br />
                                                <?php echo  $client_infos['client_country']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="user-info-section">Nationalité</td>
                                            <td>
                                                <?php echo $client_infos['client_country']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="user-info-section">Téléphone</td>
                                            <td>
                                                <?php echo $client_infos['client_cellphone']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <a class="button-social button-social-facebook" href="https://www.facebook.com/" target="_blank">
                                                    <img src="/content/img/icons/facebook-letter-logo_24px_white.png" alt="login-with-facebook" />
                                                    <p>Connecté avec Facebook</p>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div id="tab2" class="tab">
                                <div class="tab-container">
                                    <form action="/model/accountModel.php" method="post">
                                        <table>
                                            <tr>
                                                <td class="user-info-section">Avatar</td>
                                                <td colspan="2">
                                                    <div class="user-avatar-container">
                                                        <?php echo user_avatar($client_infos['client_idclient'], $client_infos['client_gender']) ?>
                                                        <input type="file" name="nom" />
                                                    </div>
                                                    <br />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="user-info-section">Email</td>
                                                <td colspan="2">
                                                    <?php echo '<input type="email" id="user-email" name="user_email" value="'.$client_infos['client_mail'].'" placeholder="xyz@example.com" />'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3" class="user-info-section">Adresse</td>
                                                <td>
                                                    <label for="user-street-number">N°</label><br />
                                                    <?php echo '<input type="number" value="'.$client_infos['client_streetnumber'].'" id="user-street-number" name="user_street_number" />'; ?><br />
                                                </td>
                                                <td>
                                                    <label for="user-street-name">Voie</label><br />
                                                    <?php echo '<input type="text" value="'.$client_infos['client_street'].'" id="user-street-name" name="user_street_name" />'; ?><br />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="user-zip-code">Code Postal</label><br />
                                                    <?php echo '<input type="number" value="'.$client_infos['client_zipcode'].'" id="user-zip-code" name="user_zip_code" />'; ?><br />
                                                </td>
                                                <td>
                                                    <label for="user-city">Ville</label><br />
                                                    <?php echo '<input type="text" value="'.$client_infos['client_city'].'" id="user-city" name="user_city" />'; ?><br />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <label for="user-country">Pays</label><br />
                                                    <?php echo '<input type="text" value="'.$client_infos['client_country'].'" id="user-country" name="user_country" />' ?><br />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="user-info-section">
                                                    <label for="user-cellphone">Téléphone</label>
                                                <td colspan="2">
                                                    <?php echo '<input type="text" value="'.$client_infos['client_cellphone'].'" id="user-cellphone" name="user_cellphone" />'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <div class="button-social button-social-facebook" onclick="fb_logout();">
                                                        <img src="/content/img/icons/facebook-letter-logo_24px_white.png" alt="login-with-facebook" />
                                                        <p>Se déconnecter de Facebook</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><button class="button-submit" name="edit_user">Mettre à jour</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>

                            <div id="tab3" class="tab">
                                <div class="tab-container">
                                    <h1>Changer le mot de passe</h1>
                                    <form action="../model/accountModel.php" method="post">
                                        <table>
                                            <tr>
                                                <td><label for="user-password-old">Ancien mot de passe</label></td>
                                                <td><input type="password" id="user-password-old" name="user_password_old" /></td>
                                            </tr>
                                            <tr>
                                                <td><label for="user-password-new">Nouveau mot de passe</label></td>
                                                <td><input type="password" id="user-password-new" name="user_password_new" /></td>
                                            </tr>
                                            <tr>
                                                <td><label for="user-password-new2">Confirmer nouveau mot de passe</label></td>
                                                <td><input type="password" id="user-password-new2" name="user_password_new2" /></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><button class="button-submit" name="change_password">Changer le mot de passe</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include '../view/footerView.php'; ?>
        </div>

        <script type="text/javascript" src="/content/js/script.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('.tabs .tab-links a').on('click', function(e)  {
                    var currentAttrValue = jQuery(this).attr('href');

                    // Show/Hide Tabs
                    jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

                    // Change/remove current tab to active
                    jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

                    e.preventDefault();
                });
            });
        </script>

    </body>
</html>
