<?php
require_once __DIR__ . '/translations.php';

if ( isset($_GET['lang']) ) {
    $lang = $_GET['lang'];
} else {
    $lang = "en";
}
?>
<!-- Template from https://github.com/petehouston/bulma-landing-page-template/blob/master/index.html -->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Miraheze is an open source project that offers free MediaWiki hosting, for everyone. Request your free wiki today!">
        <meta name="revisit-after" content="2 days">
        <meta name="keywords" content="miraheze, free, wiki hosting, mediawiki, mediawiki hosting, open source, hosting">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Miraheze</title>
        <link rel="stylesheet" href="css/bulma.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
        <link rel="icon" href="https://meta.miraheze.org/favicon.ico">
        <link rel="apple-touch-icon" href="https://meta.miraheze.org/apple-touch-icon.png">

        <style>
            .logo {
                margin-right: 0.5em;
            }
            .hero figure {
                height: 30em;
                padding-bottom: 0%;
                overflow: hidden;
            }
            .hero.is-large .hero-body {
                padding-bottom: 0;
                padding-top: 10rem;
            }

            .bg-white {
                background-color: #ffffff;
            }
            .bg-light {
                background-color: #faf6fb;
            }
            /*.media-left {
                padding-left: 15px;
            }
            .media-left .icon {
                margin-top: 15px;

            }
            .media-content {
                padding-left: 25px;
            }
            .media {
                background-color: #ffffff;
                padding: 25px;
            }*/

            .section {
                padding: 7rem 5rem;
            }

            .content h1 {
                margin-bottom: 2em;
            }

            #stn-download {
                color: #ffffff;
                background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
            }

            .hero.is-landing {
                color: #ffffff;
                background-image: linear-gradient(to top, #5ee7df 0%, #b490ca 100%);
            }

            .hero.is-landing * {
                color: #ffffff;
            }

            #stn-download h1 {
                color: #ffffff;
            }

            .button.button-store {
                border-radius: 3px;
                background: #FFF;
                box-shadow: 0px 9px 32px 0px rgba(0, 0, 0, 0.26);
                font-size: 14px;
                font-weight: 500;
                color: #633991;
                margin: 0.5rem;
                padding: 0.7rem 1.6rem;
                line-height: 1.8;
                height: auto;
                text-transform: uppercase;
                transition: all 0.3s ease;

                display: inline-block;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
            }

            .button.button-store:hover {
                color: #000000;
                background-color: #faf6fb;
            }

            .button.button-store img {
                margin-right: 0.4rem;
                vertical-align: text-bottom;
            }
            .has-features {
                color: #ff3860;
                padding: 1em;
            }
            .purpleButton {
                background: hsl(271, 100%, 71%) !important;
            }
            @media only screen and (max-width: 50em) {
                .hero.is-large .hero-body {
                    margin-bottom: -10em !important;
                }
            }
        </style>
    </head>

    <body>
        <nav class="navbar is-fixed-top">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="https://miraheze.org">
                        <img class="logo" src="https://static.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" alt="Logo">
                        Miraheze
                    </a>
                    <span class="navbar-burger burger" data-target="mainNavbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                <div id="mainNavbar" class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item is-active" href="https://miraheze.org">
                            <?php echo($translations['hometext'][$lang]);?>
                        </a>
                        <a class="navbar-item" href="https://meta.miraheze.org/wiki/">
                            Wiki
                        </a>
                        <a class="navbar-item" href="https://blog.miraheze.org">
                            Blog
                        </a>
                        <a class="navbar-item" href="https://status.miraheze.wiki/">
                            Status
                        </a>
                        <span class="navbar-item">
                            <a class="button is-primary is-rounded" id="donations">
                                <span class="icon">
                                    <i class="fas fa-gift"></i>
                                </span>
                                <span title="Hello from the other side">
                                    <?php echo($translations['donatebuttontext'][$lang]);?>
                                </span>
                            </a>
                        </span>
                        <span class="navbar-item"><form action="index.php?lang="getElementByid("lang")"">
                            <select name="lang" onchange="this.form.submit()">
                                <option value="default">Select Language</option>
                                <option value="en">English</option>
                                <option value="es">Español</option>
                                <option value="fr">Français</option>
                                <option value="ko">한국어</option>
                                <option value="it">Italiano</option>
								<option value="pl">Polski</option>
                            </select></form>
                        </span>
                        <a class="navbar-item" href="https://github.com/miraheze/landing">
                            <?php echo($translations['translatetext'][$lang]);?>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="content-wrapper">

            <section class="hero is-landing is-large">
                <div class="hero-head">
                </div>

                <div class="hero-body">
                    <div class="container has-text-centered">

                        <div class="columns">
                            <div class="column is-12 is-offset-0">
                                <h1 class="title is-1">
                                    <?php echo($translations['welcometext'][$lang]);?>
                                </h1>
                                <h2 class="subtitle is-4">
                                    <?php echo($translations['desctext'][$lang]);?>
                                </h2>

                                <a class="button is-info is-rounded" href="https://meta.miraheze.org/w/index.php?title=Special:CreateAccount&returnto=Miraheze">
                                    <?php echo($translations['jointext'][$lang]);?>
                                </a>

                                <a id="donate-button" class="button is-info is-rounded purpleButton">
                                    <?php echo($translations['donatebutton2text'][$lang]);?>
                                </a>

                                <figure class="image">
                                    <img src="https://static.miraheze.org/metawiki/0/03/Meta_Main_Page.png" alt="Logo" width="2000">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light" id="features">
                <!--<div class="box cta">
                  <p class="has-text-centered">
                    <span class="tag is-primary">New</span>
                  </p>
                </div>-->
                <div class="container section">
                    <div class="content has-text-centered">
                        <h1><?php echo($translations['featurestext'][$lang]);?></h1>
                    </div>

                    <div class="columns features">
                        <div class="column is-4">
                            <div class="card is-shady">
                                <div class="card-image has-text-centered has-features">
                                    <i class="fa fa-server fa-3x"></i>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4>MediaWiki!</h4>
                                        <p><?php echo($translations['mwtext'][$lang]);?></p>

                                        <p><?php echo($translations['mw2text'][$lang]);?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-4">
                            <div class="card is-shady">
                                <div class="card-image has-text-centered has-features">
                                    <i class="fas fa-cog fa-3x"></i>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4><?php echo($translations['exttext'][$lang]);?></h4>
                                        <p>
                                            <?php echo($translations['ext2text'][$lang]);?>
                                        </p>
                                        <ul>
                                            <li>
                                                CreateWiki
                                            </li>
                                            <li>
                                                ManageWiki
                                            </li>
                                            <li>
                                                MatomoAnalytics
                                            </li>
                                            <li>
                                                RottenLinks
                                            </li>
                                            <li>
                                                WikiDiscover
                                            </li>
                                            <li>
                                                DataDump
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-4">
                            <div class="card is-shady">
                                <div class="card-image has-text-centered has-features">
                                    <i class="fa fa-users fa-3x"></i>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h4><?php echo($translations['community0text'][$lang]);?></h4>
                                        <p>
                                            <?php echo($translations['community1text'][$lang]);?>
                                        </p>
                                        <p>
                                          <?php echo($translations['community2text'][$lang]);?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white">
                <div class="container section">
                    <div class="columns is-vcentered">
                        <div class="column">
                            <figure class="image">
                                <img src="https://static.miraheze.org/metawiki/a/a1/Meta_Mobile_Main_Page.png" alt="">
                            </figure>
                        </div>
                        <div class="column ">
                            <div class="content">
                                <h1><?php echo($translations['mobiletext'][$lang]);?></h1>
                                <p><?php echo($translations['mobile2text'][$lang]);?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light" id="FAQ">
                <div class="container section">
                    <div class="content has-text-centered">
                        <h1><?php echo($translations['faqtext'][$lang]);?></h1>
                    </div>

                    <div class="columns">
                        <div class="column is-half">
                            <div class="title is-4"><?php echo($translations['wikiqtext'][$lang]);?></div>
                            <p><?php echo($translations['wikiatext'][$lang]);?></p>
                        </div>

                        <div class="column is-half">
                            <div class="title is-4"><?php echo($translations['sslqtext'][$lang]);?></div>
                            <p><?php echo($translations['sslatext'][$lang]);?></p>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column is-half">
                            <div class="title is-4"><?php echo($translations['financeqtext'][$lang]);?></div>
                            <p><?php echo($translations['financeatext'][$lang]);?></p>
                        </div>

                        <div class="column is-half">
                            <div class="title is-4"><?php echo($translations['phabqtext'][$lang]);?></div>
                            <p><?php echo($translations['phabatext'][$lang]);?></p>
                        </div>
                    </div>

                    <div class="content has-text-centered">
                        <a class="button is-success is-rounded" href="https://meta.miraheze.org/wiki/FAQ">
                            <?php echo($translations['moretext'][$lang]);?>
                        </a>
                    </div>
                </div>
            </section>

            <section id="stn-download">
                <div class="container section has-text-centered">
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                            <h1 class="title is-2"><?php echo($translations['transparenttext'][$lang]);?></h1>
                            <p>
                                <?php echo($translations['transparent2text'][$lang]);?>
                            </p>
                        </div>
                    </div>

                </div>
            </section>

            <!-- START DIALOG -->
            <div class="modal" id="donate">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title"><?php echo($translations['donatenowtext'][$lang]);?></p>
                        <button class="delete" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <div class="content">
                            <div class="box">
                                <article class="media">
                                    <div class="media-left">
                                        <figure class="image is-64x64">
                                            <img src="https://static.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" alt="Image">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <div class="content">
                                            <p>
                                                <?php echo($translations['donatetext'][$lang]);?>
                                            </p>
                                            <p class="control">
                                                <input id="donateBox" class="input" type="text" placeholder=<?php echo($translations['moneytext'][$lang]);?> oninput="search(this)">
                                            </p>
                                            <a id="donationHref" class="button is-success is-fullwidth" href="https://www.paypal.me/miraheze">
                                                <?php echo($translations['paypaltext'][$lang]);?>
                                            </a>
                                        </div>
                                        <small>
                                            <?php echo($translations['notetext'][$lang]);?>
                                        </small>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="dismiss" data-dismiss="modal"><?php echo($translations['dismisstext'][$lang]);?></button>
                    </footer>
                </div>
            </div>

            <!-- END DIALOG -->
            <footer class="footer">
                <div class="container">
                    <div class="content has-text-centered">
                        <p>
                            <a class="button is-primary is-outlined" href="https://meta.miraheze.org/wiki/Terms_of_Use">
                                <?php echo($translations['toutext'][$lang]);?>
                            </a>
                            <a class="button is-primary is-outlined" href="https://meta.miraheze.org/wiki/Privacy_Policy">
                                <?php echo($translations['pptext'][$lang]);?>
                            </a>
                            <a class="button is-primary is-outlined" href="https://meta.miraheze.org/wiki/Meta:General_disclaimer">
                                <?php echo($translations['dtext'][$lang]);?>
                            </a>
                            <a class="button is-primary is-outlined" href="https://meta.miraheze.org/wiki/Privacy_Policy#4._Cookies">
                                <?php echo($translations['ctext'][$lang]);?>
                            </a>
                        </p>
                        <p>
                            <?php echo($translations['copytext'][$lang]);?>
                        </p>
                    </div>
                </div>
            </footer>
        </div>

        <script>
            var _paq = _paq || [];
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u="https://matomo.miraheze.org/";
                _paq.push(['setTrackerUrl', u+'piwik.php']);
                _paq.push(['setSiteId', 1]);
                _paq.push(['addTracker', u + "piwik.php", 3412]);
                var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
            })();

            document.addEventListener('DOMContentLoaded', function() {
                // Get all "navbar-burger" elements
                var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

                // Check if there are any navbar burgers
                if ($navbarBurgers.length > 0) {

                    // Add a click event on each of them
                    $navbarBurgers.forEach( function(el) {
                        el.addEventListener('click', function() {

                            // Get the target from the "data-target" attribute
                            const target = el.dataset.target;
                            const $target = document.getElementById(target);

                            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                            el.classList.toggle('is-active');
                            $target.classList.toggle('is-active');

                        });
                    });
                }
            });

            function donationDialog() {
                var modal = document.querySelector('.modal');  // assuming you have only 1
                var html = document.querySelector('html');
                modal.classList.add('is-active');
                html.classList.add('is-clipped');

                modal.querySelector('.delete').addEventListener('click', function(e) {
                    if (e) { e.preventDefault(); }
                    modal.classList.remove('is-active');
                    html.classList.remove('is-clipped');
                });

                modal.querySelector('.dismiss').addEventListener('click', function(e) {
                    if (e) { e.preventDefault(); }
                    modal.classList.remove('is-active');
                    html.classList.remove('is-clipped');
                });
            }

            document.querySelector('a#donations').addEventListener('click', function(event) {
                donationDialog();
            });

            document.querySelector('a#donate-button').addEventListener('click', function(event) {
                donationDialog();
            });

            if ( window.location.href === "https://miraheze.org/#donate" ) {
                donationDialog();
            }

            function search(ele) {
                a = document.getElementById('donationHref');
                var value;
                if (ele && ele.value) {
                    value = '/' + ele.value + '/';
                } else {
                    value = '';
                }
                a.setAttribute("href", "https://www.paypal.me/miraheze" + value );
            }
        </script>
        <noscript><p><img src="https://matomo.miraheze.org/piwik.php?idsite=1&amp;rec=1&amp;action_name=Miraheze" style="border:0;" alt="" /></p></noscript>
    </body>
</html>
