<?php require_once __DIR__ . '/config.php'; ?>
<?php require_once __DIR__ . '/getTranslations.php'; ?>

<!DOCTYPE html>
<html lang="<?php echo getLanguageCode(); ?>" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <title>Free Wiki Hosting, No Ads - Miraheze</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="wiki, wikis, free wiki hosting, Miraheze, wiki hosting, MediaWiki" />
    <meta name="description"
        content="Seamlessly create and manage a wiki for free, no ads, no strings attached. See why dozens trust our expert hosting. Join Miraheze today!" />
    <meta name="google-site-verification" content="9BKrnuH_ZCD7XGAk50SjbeUEZKjfJOQ02Dmo5pMZut0" />
    <meta name="twitter:description"
        content="Seamlessly create and manage a wiki for free, no ads, no strings attached. See why dozens trust our expert hosting. Join Miraheze today!" />
    <meta property="og:description"
        content="Seamlessly create and manage a wiki for free, no ads, no strings attached. See why dozens trust our expert hosting. Join Miraheze today!" />
    <meta property="og:image" content="https://miraheze.org/embed.png">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Free Wiki Hosting, No Ads - Miraheze" />
    <meta property="og:site_name" content="Miraheze" />
    <meta property="og:url" content="https://miraheze.org/" />
    <meta property="og:locale" content="en_US" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:image" content="https://miraheze.org/embed.png">
    <meta name="twitter:title" content="Miraheze - Free Wiki Hosting with No Ads" />
    <meta name="twitter:site" content="Miraheze" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="application-name" content="Miraheze" />
    <meta name="apple-mobile-web-app-title" content="Miraheze" />
    <link rel="canonical" href="https://miraheze.org" />
    <link rel="apple-touch-icon" href="https://miraheze.org/img/apple-touch-icon.png" />
    <script
        type="application/ld+json">[{"@context":"https:\/\/schema.org","@type":"WebPage","headline":"Miraheze","url":"/","thumbnailUrl":"","dateCreated":"","creator":[],"keywords":[]}]</script>

    <!-- Favicon -->
    <link href="https://miraheze.org/img/favicon.ico" rel="icon">

    <link rel="preload" href="webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous" />

    <!-- Icon Font Stylesheet -->
    <link rel="preload" href="https://miraheze.org/css/fonts.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript><link rel="stylesheet" href="https://miraheze.org/css/fonts.min.css" /></noscript>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://miraheze.org/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="https://miraheze.org/css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img class="logo" src="https://miraheze.org/img/Miraheze-Logo.svg" width="135" alt="Miraheze Logo" fetchpriority="high" />
                    <h1 class="m-0 wordmark text-accent">Miraheze</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    title="Navigation menu">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="/" class="nav-item nav-link active">
                            <?php echo getTranslation('home'); ?>
                        </a>
                        <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Miraheze:About"
                            class="nav-item nav-link" title="<?php echo getTranslation('about-heading'); ?>">
                            <?php echo getTranslation('about-heading'); ?>
                        </a>
                        <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Donate" class="nav-item nav-link"
                            title="<?php echo getTranslation('donate-heading'); ?>">
                            <?php echo getTranslation('donate-heading'); ?>
                        </a>
                        <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/FAQ" class="nav-item nav-link"
                            title="<?php echo getTranslation('faq'); ?>">
                            <?php echo getTranslation('faq'); ?>
                        </a>
                        <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Help_center"
                            class="nav-item nav-link" title="<?php echo getTranslation('help-center'); ?>">
                            <?php echo getTranslation('help-center'); ?>
                        </a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Languages</a>
                            <div class="dropdown-menu m-0">
                                <?php
                                $i18nDirectory = array_diff(scandir('i18n'), ['.', '..', 'qqq.json']);
                                $languageCodes = str_replace('.json', '', $i18nDirectory);

                                foreach ($languageCodes as $languageCode) {
                                    $displayName = LOCALE_GET_DISPLAY_NAME($languageCode, $languageCode);

                                    if ($languageCode === 'en') {
                                        echo "<a class=\"dropdown-item\" href=\"/\" title=\"{$displayName}\">" . $displayName . '</a>';
                                        continue;
                                    }

                                    echo "<a class=\"dropdown-item\" href=\"/{$languageCode}\" title=\"{$displayName}\">" . $displayName . '</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <a href="https://meta.miraheze.org/wiki/Special:UserLogin"
                        class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block"
                        title="<?php echo getTranslation('sign-in'); ?>">
                        <?php echo getTranslation('sign-in'); ?>
                    </a>
                    <a href="https://meta.miraheze.org/wiki/Special:RequestWiki"
                        class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block"
                        title="<?php echo getTranslation('requestwiki-text'); ?>">
                        <?php echo getTranslation('requestwiki-text'); ?>
                    </a>
                </div>
            </nav>

            <div class="container-fluid hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-accent mb-4">
                                <?php echo getTranslation('welcome-text'); ?>
                            </h1>
                            <p class="pb-3">
                                <?php echo getTranslation('description-text'); ?>
                            </p>
                            <a href="https://meta.miraheze.org/wiki/Special:RequestWiki"
                                class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3"
                                title="<?php echo getTranslation('requestwiki-text'); ?>">
                                <?php echo getTranslation('requestwiki-text'); ?>
                            </a>
                            <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Donate"
                                class="btn btn-light py-sm-3 px-sm-5 rounded-pill"
                                title="<?php echo getTranslation('donate-heading'); ?>">
                                <?php echo getTranslation('donate-heading'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Feature Start -->
        <div class="container-xxl py-5" style="padding-top: 0rem !important;">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <h1 class="text-center">
                        <?php echo getTranslation('wikitype-header'); ?>
                    </h1>
                    <p class="text-center">
                        <?php echo getTranslation('wikitype-desc'); ?>
                    </p>
                    <div class="col-lg-4 wow fadeInUp d-flex" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                            <h2 class="h5 mb-3">
                                <?php echo getTranslation('wikitype-technology'); ?>
                            </h2>

                            <p class="m-0">
                                <?php echo getTranslation('wikitype-technology-desc'); ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeInUp d-flex" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-gamepad text-primary mb-4"></i>
                            <h2 class="h5 mb-3">
                                <?php echo getTranslation('wikitype-games'); ?>
                            </h2>
                            <p class="m-0">
                                <?php echo getTranslation('wikitype-games-desc'); ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeInUp d-flex" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-masks-theater text-primary mb-4"></i>
                            <h2 class="h5 mb-3">
                                <?php echo getTranslation('wikitype-tv'); ?>
                            </h2>
                            <p class="m-0">
                                <?php echo getTranslation('wikitype-tv-desc'); ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeInUp d-flex" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-flask-vial text-primary mb-4"></i>
                            <h2 class="h5 mb-3">
                                <?php echo getTranslation('wikitype-science'); ?>
                            </h2>
                            <p class="m-0">
                                <?php echo getTranslation('wikitype-science-desc'); ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeInUp d-flex" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h2 class="h5 mb-3">
                                <?php echo getTranslation('wikitype-education'); ?>
                            </h2>
                            <p class="m-0">
                                <?php echo getTranslation('wikitype-education-desc'); ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeInUp d-flex" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-bullhorn text-primary mb-4"></i>
                            <h2 class="h5 mb-3">
                                <?php echo getTranslation('wikitype-more'); ?>
                            </h2>
                            <p class="m-0">
                                <?php echo getTranslation('wikitype-more-desc'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- Service Start -->
        <div class="container-xxl">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-center mb-5">
                        <?php echo getTranslation('features-text'); ?>
                    </h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp d-flex" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-rectangle-ad fa-2x"></i>
                            </div>
                            <h2 class="h5 mb-3">
                                <?php echo getTranslation('features-adfree'); ?>
                            </h2>
                            <p class="m-0">
                                <?php echo getTranslation('features-adfree-desc'); ?>
                            </p>
                            <a class="btn btn-square"
                                href="https://meta.miraheze.org/wiki/Special:MyLanguage/FAQ#Why_don't_you_display_ads?"
                                title="<?php echo getTranslation('learn-more'); ?>"><i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp d-flex" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-screwdriver-wrench fa-2x"></i>
                            </div>
                            <h2 class="h5 mb-3">
                                <?php echo getTranslation('features-configure'); ?>
                            </h2>
                            <p class="m-0">
                                <?php echo getTranslation('features-configure-desc'); ?>
                            </p>
                            <a class="btn btn-square"
                                href="https://meta.miraheze.org/wiki/Special:MyLanguage/ManageWiki"
                                title="<?php echo getTranslation('learn-more'); ?>"><i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp d-flex" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-swatchbook fa-2x"></i>
                            </div>
                            <h2 class="h5 mb-3">
                                <?php echo getTranslation('features-customizability'); ?>
                            </h2>
                            <p class="m-0">
                                <?php echo getTranslation('features-customizability-desc'); ?>
                            </p>
                            <a class="btn btn-square"
                                href="https://meta.miraheze.org/wiki/Special:MyLanguage/Extensions"
                                title="<?php echo getTranslation('learn-more'); ?>"><i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp d-flex" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-window-restore fa-2x"></i>
                            </div>
                            <h2 class="h5 mb-3">
                                <?php echo getTranslation('features-customdomain'); ?>
                            </h2>
                            <p class="m-0">
                                <?php echo getTranslation('features-customdomain-desc'); ?>
                            </p>
                            <a class="btn btn-square"
                                href="https://meta.miraheze.org/wiki/Special:MyLanguage/Custom_domains"
                                title="<?php echo getTranslation('learn-more'); ?>"><i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp d-flex" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-headset fa-2x"></i>
                            </div>
                            <h2 class="h5 mb-3">
                                <?php echo getTranslation('features-support'); ?>
                            </h2>
                            <p class="m-0">
                                <?php echo getTranslation('features-support-desc'); ?>
                            </p>
                            <a class="btn btn-square"
                                href="https://meta.miraheze.org/wiki/Special:MyLanguage/Help_center"
                                title="<?php echo getTranslation('learn-more'); ?>"><i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp d-flex" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-pen-ruler fa-2x"></i>
                            </div>
                            <h2 class="h5 mb-3">
                                <?php echo getTranslation('features-visualeditor'); ?>
                            </h2>
                            <p class="m-0">
                                <?php echo getTranslation('features-visualeditor-desc'); ?>
                            </p>
                            <a class="btn btn-square"
                                href="https://meta.miraheze.org/wiki/Special:MyLanguage/VisualEditor"
                                title="<?php echo getTranslation('learn-more'); ?>"><i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Facts Start -->
        <div class="container-fluid fact py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                        <h1 class="text-accent mb-2" data-toggle="counter-up">22,000</h1>
                        <p class="text-accent mb-0">
                            <?php echo getTranslation('statistics-wikis'); ?>
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                        <h1 class="text-accent mb-2" data-toggle="counter-up">60,000</h1>
                        <p class="text-accent mb-0">
                            <?php echo getTranslation('statistics-requests'); ?>
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-accent mb-2" data-toggle="counter-up">680,000</h1>
                        <p class="text-accent mb-0">
                            <?php echo getTranslation('statistics-users'); ?>
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                        <h1 class="text-accent mb-2"><span data-toggle="counter-up">100</span>%</h1>
                        <p class="text-accent mb-0">
                            <?php echo getTranslation('statistics-powered'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

        <!-- Footer Start -->
        <div class="container-fluid text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-accent h5 mb-4">Contact us<span></span></p>
                        <p><i class="fa fa-envelope me-3"></i><span class="text-accent">privacy [at] miraheze.org</span></p>
                        <p><i class="fa fa-globe me-3"></i><a class="text-accent"
                                href="https://meta.miraheze.org/wiki/Special:MyLanguage/Help_center"
                                title="On-wiki">On-wiki</a></p>
                        <p><i class="fa fa-flag-checkered me-3"></i><a class="text-accent"
                                href="https://issue-tracker.miraheze.org" title="Issue tracker">Issue tracker</a></p>

                        <div class="d-flex pt-2">
                            <a rel="me" class="btn btn-outline-light btn-social"
                                href="https://mastodon.social/@miraheze" title="Mastodon"><i
                                    class="fab fa-mastodon"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://bsky.app/profile/miraheze.org"
                                title="BlueSky"><i class="fab fa-bluesky"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://facebook.com/Miraheze"
                                title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://twitter.com/miraheze"><i
                                    class="fab fa-twitter" title="Twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://github.com/miraheze"><i
                                    class="fab fa-github" title="GitHub"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://miraheze.org/discord"><i
                                    class="fab fa-discord" title="Discord"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-accent h5 mb-4">Quick Links<span></span></p>
                        <a class="nav nav-link"
                            href="https://meta.miraheze.org/wiki/Special:MyLanguage/Miraheze:About"
                            title="<?php echo getTranslation('about-heading'); ?>">
                            <?php echo getTranslation('about-heading'); ?>
                        </a>
                        <a class="nav nav-link" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Help_center"
                            title="<?php echo getTranslation('help-center'); ?>">
                            <?php echo getTranslation('help-center'); ?>
                        </a>
                        <a class="nav nav-link" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Privacy_Policy"
                            title="<?php echo getTranslation('footer-privacy-policy'); ?>">
                            <?php echo getTranslation('footer-privacy-policy'); ?>
                        </a>
                        <a class="nav nav-link" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Terms_of_Use"
                            title="<?php echo getTranslation('footer-terms'); ?>">
                            <?php echo getTranslation('footer-terms'); ?>
                        </a>
                        <a class="nav nav-link" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Content_Policy"
                            title="<?php echo getTranslation('footer-content-policy'); ?>">
                            <?php echo getTranslation('footer-content-policy'); ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyright-container">
                <div class="container px-lg-5">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                <span class="border-bottom text-accent">
                                    <?php echo getTranslation('footer-desc'); ?>
                                </span>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a class="text-accent" href="/">
                                        <?php echo getTranslation('home'); ?>
                                    </a>
                                    <a class="text-accent"
                                        href="https://meta.miraheze.org/wiki/Special:MyLanguage/Privacy_Policy#Cookies"
                                        title="<?php echo getTranslation('footer-cookie'); ?>">
                                        <?php echo getTranslation('footer-cookie'); ?>
                                    </a>
                                    <a class="text-accent"
                                        href="https://meta.miraheze.org/wiki/Special:MyLanguage/Help_center"
                                        title="<?php echo getTranslation('help-center'); ?>">
                                        <?php echo getTranslation('help-center'); ?>
                                    </a>
                                    <a class="text-accent" href="https://meta.miraheze.org/wiki/Special:MyLanguage/FAQ"
                                        title="<?php echo getTranslation('faq'); ?>">
                                        <?php echo getTranslation('faq'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top" title="Back to top"><i
                class="fa fa-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script defer
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <!-- Matomo analytics -->
    <script>
        var _paq = window._paq = window._paq || [];
        _paq.push(['disableCookies']);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function () {
            var u = 'https://analytics.wikitide.net/';
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setDocumentTitle', 'Landing - Home']);
            _paq.push(['setSiteId', 9838]);
            _paq.push(['addTracker', u + 'matomo.php', 1]);
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.async = true; g.src = u + 'matomo.js'; s.parentNode.insertBefore(g, s);
        })();
    </script>
    <noscript>
        <p><img src="https://analytics.wikitide.net/matomo.php?idsite=9838&amp;rec=1&amp;action_name=Landing_Home"
                style="border:0;" alt="Matomo" /></p>
    </noscript>
</body>

</html>
