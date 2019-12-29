<?php
require_once __DIR__ . '/translations.php';
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Miraheze is an open source project that offers free MediaWiki hosting, for everyone. Request your free wiki today!">
    <meta name="revisit-after" content="2 days">
    <meta name="keywords" content="miraheze, free, wiki hosting, mediawiki, mediawiki hosting, open source, hosting">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title><?php echo( translate( 'header-logo-text' ) ); ?></title>

    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/freelancer.css" rel="stylesheet">
    <link rel="icon" href="https://meta.miraheze.org/favicon.ico">
  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img class="logo" src="https://static.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" alt="Logo" style="height:3em; width:3em; padding:0.5em;">
          <?php echo( translate( 'header-logo-text' ) ); ?>
        </a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <?php echo( translate( 'header-menu-title' ) ); ?>
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#features">
                <?php echo( translate( 'header-menu-features' ) ); ?>
              </a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">
                <?php echo( translate( 'header-menu-about' ) ); ?>
              </a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="https://meta.miraheze.org/wiki/Miraheze">
                <?php echo( translate( 'header-menu-wiki' ) ); ?>
              </a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="https://blog.miraheze.org">
                <?php echo( translate( 'header-menu-blog' ) ); ?>
              </a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="https://status.miraheze.wiki/">
                <?php echo( translate( 'header-menu-status' ) ); ?>
              </a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="https://donate.miraheze.org">
                <?php echo( translate( 'header-menu-donate' ) ); ?>
              </a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <div class="form-group nav-link py-3 px-0 px-lg-3">
                <div></div>
                <form action="index.php?lang="getElementByid("lang")"">
                  <select name="lang" onchange="this.form.submit()">
                    <option value="en">English</option>
                  </select>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead bg-primary text-white text-center">
      <div class="container d-flex align-items-center flex-column">

        <h1 class="masthead-heading text-uppercase mb-0">
          <?php echo( translate( 'welcome-text' ) ); ?>
        </h1>

        <p class="masthead-subheading font-weight-light mb-0">
          <?php echo( translate( 'description-text' ) ); ?>
        </p>

        <div>
          <a class="btn btn-xl btn-outline-light" href="https://meta.miraheze.org/w/index.php?title=Special:CreateAccount&returnto=Miraheze">
            <i class="fas fa-sign-in-alt mr-2"></i>
            <?php echo( translate( 'join-text' ) ); ?>
          </a>

          <a class="btn btn-xl btn-outline-light" href="https://donate.miraheze.org?lang=$lang">
            <i class="fas fa-donate mr-2"></i>
            <?php echo( translate( 'donate-text' ) ); ?>
          </a>
        </div>

        <img class="img-fluid" src="https://static.miraheze.org/metawiki/0/03/Meta_Main_Page.png" alt="Logo" width="1500">

      </div>
    </header>

    <section class="page-section features" id="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="page-section-heading text-uppercase">
              <?php echo( translate( 'features-text' ) ); ?>
            </h2>
          </div>
        </div>

        <div class="divider-custom divider-light"></div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-server fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">
              <?php echo( translate( 'features-mediawiki' ) ); ?>
            </h4>
            <p class="text-muted">
              <?php echo( translate( 'features-mediawiki-desc' ) ); ?>
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-donate fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">
              <?php echo( translate( 'features-non-profit-text' ) ); ?>
            </h4>
            <p class="text-muted">
              <?php echo( translate( 'features-non-profit-desc' ) ); ?>
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-users fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">
              <?php echo( translate( 'features-community-text' ) ); ?>
            </h4>
            <p class="text-muted">
              <?php echo( translate( 'features-community-desc' ) ); ?>
            </p>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-mobile-alt fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">
              <?php echo( translate( 'features-responsive-text' ) ); ?>
            </h4>
            <p class="text-muted">
              <?php echo( translate( 'features-responsive-desc' ) ); ?>
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-cog fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">
              <?php echo( translate( 'features-extensions-text' ) ); ?>
            </h4>
            <p class="text-muted">
              <?php echo( translate( 'features-extensions-desc' ) ); ?>
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-angle-double-right fa-stack-1x fa-inverse"></i>
            </span>
            <p class="text-muted">
              <?php echo( translate( 'features-more-desc' ) ); ?>
            </p>
           </div>
        </div>
      </div>
    </section>

    <section class="page-section text-white mb-0" id="about">
      <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-white">
          <?php echo( translate( 'about-title' ) ); ?>
        </h2>
        <div class="divider-custom divider-light"></div>
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <p class="lead">
              <?php echo( translate( 'about-desc' ) ); ?>
            </p>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0"></div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4"><?php echo( translate( 'socialmedia-title' ) ); ?></h4>
            <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/miraheze/">
              <i class="fab fa-fw fa-facebook-f"></i>
            </a>
            <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/miraheze">
              <i class="fab fa-fw fa-twitter"></i>
            </a>
          </div>
        </div>
        <div class="bottom-footer">
          <small>
            <?php echo( translate( 'footer-desc' ) ); ?>

            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://meta.miraheze.org/wiki/Terms_of_Use">
                  <?php echo( translate( 'footer-terms' ) ); ?>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://meta.miraheze.org/wiki/Privacy_Policy">
                  <?php echo( translate( 'footer-privacy-policy' ) ); ?>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://meta.miraheze.org/wiki/Meta:General_disclaimer">
                  <?php echo( translate( 'footer-disclaimers' ) ); ?>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://meta.miraheze.org/wiki/Privacy_Policy#4._Cookies">
                  <?php echo( translate( 'footer-cookie' ) ); ?>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://meta.miraheze.org/wiki/Help_center">
                  <?php echo( translate( 'footer-contact' ) ); ?>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://meta.miraheze.org/wiki/FAQ">
                  <?php echo( translate( 'footer-faq' ) ); ?>
                </a>
              </li>
            </ul>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://github.com/miraheze/landing">
                  <?php echo( translate( 'footer-translate' ) ); ?>
                </a>
              </li>
            </ul>
          </small>
        </div>
      </div>
    </footer>

    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/freelancer.min.js"></script>

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
    </script>
    <noscript><p><img src="https://matomo.miraheze.org/piwik.php?idsite=1&amp;rec=1&amp;action_name=Miraheze" style="border:0;" alt="" /></p></noscript>
  </body>
</html>
