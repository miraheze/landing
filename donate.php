<?php require_once __DIR__ . '/config.php'; ?>
<?php require_once __DIR__ . '/getTranslations.php'; ?>

<!DOCTYPE html>
<html lang="<?php echo getLanguageCode(); ?>" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <title>Donate to Miraheze</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="donate, miraheze donate, free wiki hosting" />
    <meta name="description"
        content="Donate and help Miraheze's mission keep going for years to come. Donate to Miraheze today!" />
    <meta name="google-site-verification" content="9BKrnuH_ZCD7XGAk50SjbeUEZKjfJOQ02Dmo5pMZut0" />
    <meta name="twitter:description"
        content="Donate and help Miraheze's mission keep going for years to come. Donate to Miraheze today!" />
    <meta property="og:description"
        content="Donate and help Miraheze's mission keep going for years to come. Donate to Miraheze today!" />
    <meta property="og:image" content="https://miraheze.org/embed.png">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Donate to Miraheze" />
    <meta property="og:site_name" content="Miraheze" />
    <meta property="og:url" content="https://donate.miraheze.org/" />
    <meta property="og:locale" content="en_US" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:image" content="https://donate.miraheze.org/embed.png">
    <meta name="twitter:title" content="Donate to Miraheze" />
    <meta name="twitter:site" content="Miraheze" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="application-name" content="Miraheze" />
    <meta name="apple-mobile-web-app-title" content="Miraheze" />
    <link rel="canonical" href="https://donate.miraheze.org" />
    <link rel="icon" type="image/x-icon" href="https://donate.miraheze.org/img/favicon.ico" />
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png" />
    <script
        type="application/ld+json">[{"@context":"https:\/\/schema.org","@type":"WebPage","headline":"Miraheze","url":"/","thumbnailUrl":"","dateCreated":"","creator":[],"keywords":[]}]</script>

    <!-- Favicon -->
    <link href="https://donate.miraheze.org/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://donate.miraheze.org/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="https://donate.miraheze.org/css/style.css" rel="stylesheet">

    <!-- Matomo analytics -->
    <script>
        var _paq = window._paq = window._paq || [];
        _paq.push(['disableCookies']);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function () {
            var u = 'https://analytics.wikitide.net/';
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setDocumentTitle', 'Landing - Donate']);
            _paq.push(['setSiteId', 9838]);
            _paq.push(['addTracker', u + 'matomo.php', 1]);
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.async = true; g.src = u + 'matomo.js'; s.parentNode.insertBefore(g, s);
        })();

        function _amountInput(ele) {
            var value;
            if (ele && ele.value) {
                value = '/' + ele.value + '/';
            } else {
                value = '';
            }
            var a = document.getElementById('donationHref');
            a.setAttribute('href', 'https://www.paypal.com/donate/?hosted_button_id=Q8ZN29LJVXP7L' + value);
        }
    </script>
    <noscript>
        <p><img src="https://analytics.wikitide.net/matomo.php?idsite=9838&amp;rec=1&amp;action_name=Landing_Donate"
                style="border: 0;" alt="Matomo" /></p>
    </noscript>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0 text-accent">Miraheze</h1>
                    <!-- <img src="https://static.wikitide.net/commonswiki/2/2c/WikiTide_wordmark.png" width="135" alt="Miraheze"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    title="Navigation menu">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="https://miraheze.org" class="nav-item nav-link">
                            <?php echo getTranslation('home'); ?>
                        </a>
                        <a href="https://meta.miraheze.org/wiki/Special:MyLanguage/Miraheze:About"
                            class="nav-item nav-link" title="<?php echo getTranslation('about-heading'); ?>">
                            <?php echo getTranslation('about-heading'); ?>
                        </a>
                        <a href="#" class="nav-item nav-link active"
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

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1>
                                <?php echo getTranslation('donate-heading'); ?>
                            </h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <p class="breadcrumb-item active justify-content-center" aria-current="page">
                                    <?php echo getTranslation('donate-subheading'); ?>
                                </p>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Page Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <form name="donate" id="donateForm"
                            style="display: block; width: 100%; padding: 0.75rem 1rem; font-size: 1rem; line-height: 1.5; background-clip: padding-box; border: 1px solid #ced4da; -webkit-appearance: none; -moz-appearance: none; appearance: none; border-radius: 0.25rem;">
                            <div class="form-control-lg mb-0 pb-2 col-lg-8 mx-auto">
                                <input class="form-control" id="amountInput" type="number"
                                    placeholder="<?php echo getTranslation('donate-amount'); ?>"
                                    oninput="_amountInput(this)">

                                <a id="donationHref" class="btn btn-primary rounded-pill py-3 px-5"
                                    href="https://www.paypal.com/donate/?hosted_button_id=Q8ZN29LJVXP7L"
                                    title="<?php echo getTranslation('donate-heading'); ?>">
                                    <?php echo getTranslation('donate-heading'); ?>
                                </a>
                                <p class="col-form-label-sm py-0">
                                    <?php echo getTranslation('donate-note'); ?>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page End -->

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
                            href="https://meta.miraheze.org/wiki/Special:MyLanguage/Miraheze:About_us"
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
</body>

</html>
