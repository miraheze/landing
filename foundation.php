<?php require_once __DIR__ . '/config.php'; ?>
<?php require_once __DIR__ . '/getTranslations.php'; ?>

<!DOCTYPE html>
<html lang="<?php echo getLanguageCode(); ?>" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8" />
    <title>WikiTide Foundation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="keywords" content="wikitide foundation" />
    <meta name="description"
        content="The WikiTide Foundation is the nonprofit organization responsible for operating Miraheze. It is located in the United States and recognized as a 501(c)(3) tax-exempt charity." />
    <meta name="google-site-verification" content="9BKrnuH_ZCD7XGAk50SjbeUEZKjfJOQ02Dmo5pMZut0" />
    <meta name="twitter:description"
        content="The WikiTide Foundation is the nonprofit organization responsible for operating Miraheze. It is located in the United States and recognized as a 501(c)(3) tax-exempt charity." />
    <meta property="og:description"
        content="The WikiTide Foundation is the nonprofit organization responsible for operating Miraheze. It is located in the United States and recognized as a 501(c)(3) tax-exempt charity." />
    <meta property="og:image" content="https://foundation.wikitide.org/embed.png" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="WikiTide Foundation" />
    <meta property="og:site_name" content="WikiTide Foundation" />
    <meta property="og:url" content="https://foundation.wikitide.org/" />
    <meta property="og:locale" content="en_US" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:image" content="https://foundation.wikitide.org/embed.png" />
    <meta name="twitter:title" content="WikiTide Foundation" />
    <meta name="twitter:site" content="WikiTide Foundation" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="application-name" content="WikiTide Foundation" />
    <meta name="apple-mobile-web-app-title" content="WikiTide Foundation" />
    <link rel="canonical" href="https://foundation.wikitide.org" />
    <link rel="icon" type="image/x-icon" href="https://foundation.wikitide.org/img/favicon-wikitide.ico" />
    <link rel="apple-touch-icon" href="https://foundation.wikitide.org/img/apple-touch-icon-wikitide.png" />
    <script
        type="application/ld+json">[{"@context":"https:\/\/schema.org","@type":"WebPage","headline":"WikiTide Foundation","url":"/","thumbnailUrl":"","dateCreated":"","creator":[],"keywords":[]}]</script>

    <!-- Favicon -->
    <link href="https://foundation.wikitide.org/img/favicon-wikitide.ico" rel="icon" />

    <link rel="preload" href="webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous" />

    <!-- Icon Font Stylesheet -->
    <link rel="preload" href="https://foundation.wikitide.org/css/fonts.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript><link rel="stylesheet" href="https://foundation.wikitide.org/css/fonts.min.css" /></noscript>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://foundation.wikitide.org/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="https://foundation.wikitide.org/css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img rel="preload" fetchpriority="high" as="image" class="logo" src="https://foundation.wikitide.org/img/WikiTide-Logo.svg" alt="WikiTide Logo" />
                    <h1 class="m-0 wordmark text-accent">WikiTide</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    title="Navigation menu">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#" class="nav-item nav-link active">
                            <?php echo getTranslation('home'); ?>
                        </a>
                        <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/WikiTide_Foundation"
                            class="nav-item nav-link" title="<?php echo getTranslation('about-heading'); ?>">
                            <?php echo getTranslation('about-heading'); ?>
                        </a>
                        <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Donate" class="nav-item nav-link"
                            title="Support our Mission">
                            Support our Mission
                        </a>
                        <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/FAQ" class="nav-item nav-link"
                            title="<?php echo getTranslation('faq'); ?>">
                            <?php echo getTranslation('faq'); ?>
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
                                WikiTide Foundation
                            </h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <p class="pb-3">
                                The WikiTide Foundation is the nonprofit organization responsible for operating Miraheze. It is located in the United States and recognized as a 501(c)(3) tax-exempt charity.
                            </p>
                            <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/WikiTide_Foundation"
                                class="btn btn-light btn-lg py-sm-3 px-sm-5 rounded-pill"
                                title="Learn more">
                                <i class="fa fa-info-circle"></i>
                                Learn more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Footer Start -->
        <div class="container-fluid text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-accent h5 mb-4">Contact us<span></span></p>
                        <p><i class="fa fa-envelope me-3"></i><span class="text-accent">board [at] wikitide.org</span>

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
                            href="https://meta.miraheze.org/wiki/Special:MyLanguage/WikiTide_Foundation"
                            title="<?php echo getTranslation('about-heading'); ?>">
                            <?php echo getTranslation('about-heading'); ?>
                        </a>
                        <a class="nav nav-link" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Board_of_Directors"
                            title="Board of Directors">
                            Board of Directors
                        </a>
                        <a class="nav nav-link" href="https://meta.miraheze.org/wiki/Special:MyLanguage/WikiTide_Foundation/Bylaws"
                            title="Foundation Bylaws">
                            Foundation Bylaws
                        </a>
                        <a class="nav nav-link" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Privacy_Policy"
                            title="<?php echo getTranslation('footer-privacy-policy'); ?>">
                            <?php echo getTranslation('footer-privacy-policy'); ?>
                        </a>
                        <a class="nav nav-link" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Terms_of_Use"
                            title="<?php echo getTranslation('footer-terms'); ?>">
                            <?php echo getTranslation('footer-terms'); ?>
                        </a>
                        <a class="nav nav-link" href="https://meta.miraheze.org/wiki/Special:MyLanguage/Copyright_Policy"
                            title="Copyright Policy">
                            Copyright Policy
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
                                        href="https://meta.miraheze.org/wiki/Special:MyLanguage/Privacy_Policy#2._Cookies"
                                        title="<?php echo getTranslation('footer-cookie'); ?>">
                                        <?php echo getTranslation('footer-cookie'); ?>
                                    </a>
                                    <a class="text-accent"
                                        href="https://meta.miraheze.org/wiki/Special:MyLanguage/WikiTide_Foundation"
                                        title="<?php echo getTranslation('about-heading'); ?>">
                                        <?php echo getTranslation('about-heading'); ?>
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
            _paq.push(['setDocumentTitle', 'Landing - WikiTide Foundation']);
            _paq.push(['setSiteId', 9838]);
            _paq.push(['addTracker', u + 'matomo.php', 1]);
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.async = true; g.src = u + 'matomo.js'; s.parentNode.insertBefore(g, s);
        })();
    </script>
    <noscript>
        <p><img src="https://analytics.wikitide.net/matomo.php?idsite=9838&amp;rec=1&amp;action_name=Landing_WikiTide_Foundation"
                style="border: 0;" alt="Matomo" /></p>
    </noscript>
</body>

</html>
