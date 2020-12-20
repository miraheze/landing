<!--
The MIT License (MIT)

Copyright (c) 2013-2019 Blackrock Digital LLC

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
-->

<?php
require_once __DIR__ . '/translations.php';
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Miraheze is an open source project that offers free MediaWiki hosting, for everyone. Request your free wiki today!">
    <meta name="revisit-after" content="2 days">
    <meta name="keywords" content="miraheze, free, wiki hosting, mediawiki, mediawiki hosting, open source, hosting, donate, non-profit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo( translate( 'header-donate-logo-text' ) ); ?></title>

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/miraheze.min.css">
    <link rel="icon" href="https://meta.miraheze.org/favicon.ico">
  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="https://miraheze.org">
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
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="https://miraheze.org">
                <?php echo( translate( 'header-menu-home' ) ); ?>
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
              <div class="form-group nav-link py-3 px-0 px-lg-3">
                <div></div>
                <form action="index.php?lang="getElementByid("lang")"">
                  <select name="lang" onchange="this.form.submit()">
                    <option value="bn">বাংলা</option>
                    <option value="en">English</option>
                    <option value="es">Español</option>
                    <option value="fr">Français</option>
                    <option value="it">Italiano</option>
                    <option value="ja">日本語</option>
                    <option value="ko">한국어</option>
                    <option value="pl">Polski</option>
                    <option value="ru">Русский</option>
                    <option value="th">ภาษาไทย</option>
                    <option value="zh-hans">中文（简体）</option>
                    <option value="zh-hant">中文（繁體）</option>
                  </select>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section mb-0" id="siteNotice">
      <div class="container">
        <div class="divider-custom divider-light"></div>
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <p class="lead">
              Miraheze is a community-centric, ad free, and locally controlled wiki hosting platform funded 100% by donations. We've been fortunate to continue seeing impressive year-over-year traffic and community growth. With that growth, though, comes the need for additional infrastructure to manage increased capacity. So, we ask for you to consider chipping in with £5, £10, £20, or whatever amount you can afford. If 500 of Miraheze's 100,000+ users gave only £11.25 ($15 USD) once a year, Miraheze would exceed its budget requirements. Donate via our <a href="https://www.gofundme.com/f/help-miraheze-stay-online-in-2021">GoFundMe page</a>, <a href="https://paypal.me/mirahezelimited">PayPal</a> or <a href="https://github.com/sponsors/miraheze">GitHub Sponsors</a>! <br />
              To thank you for your support, you have the option of on-wiki acknowledgement if you include your wiki username with your donation.            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section">
      <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><?php echo( translate( 'header-menu-donate' ) ); ?></h2>

        <div class="divider-custom"></div>

        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form name="donate" id="donateForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label><?php echo( translate( 'donate-amount' ) ); ?></label>
                  <input class="form-control" id="amountInput" type="number" placeholder="<?php echo( translate( 'donate-amount' ) ); ?>" oninput="_amountInput(this)">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div class="form-group">
                <a id="donationHref" class="btn btn-primary btn-xl" href="https://paypal.me/mirahezelimited">
                    <?php echo( translate( 'header-menu-donate' ) ); ?>
                </a>
                <br />
                <small>
                <?php echo( translate( 'donate-note' ) ); ?>
                </small>
              </div>
            </form>
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
            <a class="btn btn-outline-light btn-social mx-1" href="https://miraheze.org/discord">
              <i class="fab fa-fw fa-discord"></i>
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

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/miraheze.min.js"></script>

    <script>
      var _paq = _paq || [];
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="https://matomo.miraheze.org/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 4658]);
        _paq.push(['addTracker', u + "piwik.php", 1]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();

      function _amountInput(ele) {
        a = document.getElementById('donationHref');
        var value;
        if (ele && ele.value) {
            value = '/' + ele.value + '/';
        } else {
            value = '';
        }
        a.setAttribute("href", "https://paypal.me/mirahezelimited" + value );
      }
    </script>
    <noscript><p><img src="https://matomo.miraheze.org/piwik.php?idsite=1&amp;rec=1&amp;action_name=Miraheze" style="border:0;" alt="" /></p></noscript>
  </body>
</html>
