<?php

require_once __DIR__ . '/translations.php';

if ( isset( $_GET['lang'] ) && $_GET['lang'] ) {
    $lang = $_GET['lang'];
} else {
    $lang = "en";
}

?>
<!DOCTYPE html>
<html lang="$lang">

  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Miraheze is an open source project that offers free MediaWiki hosting, for everyone. Request your free wiki today!">
    <meta name="revisit-after" content="2 days">
    <meta name="keywords" content="miraheze, free, wiki hosting, mediawiki, mediawiki hosting, open source, hosting">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Miraheze</title>

    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/freelancer.css" rel="stylesheet">
    <link rel="icon" href="https://meta.miraheze.org/favicon.ico">

  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img class="logo" src="https://static.miraheze.org/metawiki/3/35/Miraheze_Logo.svg" alt="Logo" style="height:3em;width:3em;padding:0.5em;">
          Miraheze
        </a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#features">Features</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="https://meta.miraheze.org/wiki/Miraheze">Wiki</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="https://blog.miraheze.org">Blog</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="https://status.miraheze.wiki/">Status</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="https://donate.miraheze.org">Donate</a>
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

    <!-- Masthead -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container d-flex align-items-center flex-column">

        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase mb-0">Welcome to Miraheze!</h1>

        <!-- Masthead Subheading -->
        <p class="masthead-subheading font-weight-light mb-0">Miraheze is a non-profit, with a mission to provide a free community-centric wiki farm.</p>

        <div>
          <a class="btn btn-xl btn-outline-light" href="https://meta.miraheze.org/w/index.php?title=Special:CreateAccount&returnto=Miraheze">
              <i class="fas fa-sign-in-alt mr-2"></i>
              Join Today!
          </a>

          <a class="btn btn-xl btn-outline-light" href="https://donate.miraheze.org">
              <i class="fas fa-donate mr-2"></i>
              Donate Today!
          </a>
        </div>

        <img class="img-fluid" src="https://static.miraheze.org/metawiki/0/03/Meta_Main_Page.png" alt="Logo" width="1500">

      </div>
    </header>

    <section class="page-section features" id="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="page-section-heading text-uppercase">Features</h2>
          </div>
        </div>

        <div class="divider-custom divider-light"></div>

          <div class="row text-center">
            <div class="col-md-4">
              <span class="fa-stack fa-4x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-server fa-stack-1x fa-inverse"></i>
              </span>
              <h4 class="service-heading">MediaWiki</h4>
              <p class="text-muted">
                Miraheze runs the same software as Wikipedia, <a href="https://www.mediawiki.org">MediaWiki!</a>
                You can do anything from uploading media such as images or videos, to writing articles or blogs.
                We have over 200 extensions and over 15 skins to choose from to customise your experience with MediaWiki!
             </p>
           </div>
           <div class="col-md-4">
             <span class="fa-stack fa-4x">
               <i class="fas fa-circle fa-stack-2x text-primary"></i>
               <i class="fas fa-donate fa-stack-1x fa-inverse"></i>
             </span>
             <h4 class="service-heading">Non-Profit</h4>
             <p class="text-muted">
               Miraheze is registered as Miraheze Limited in the United Kingdom.
               We provide 100% free wikis as a Non-Profit that maintains the servers and keeps up with the development of our in house extensions.
             </p>
           </div>
           <div class="col-md-4">
             <span class="fa-stack fa-4x">
               <i class="fas fa-circle fa-stack-2x text-primary"></i>
               <i class="fas fa-users fa-stack-1x fa-inverse"></i>
             </span>
             <h4 class="service-heading">Community</h4>
             <p class="text-muted">As a community we all work together to achieve a common goal of being a great wiki farm! This allows us to achieve the best possible outcome for users, by allowing users to learn</p>
           </div>
         </div>

         <div class="row text-center">
           <div class="col-md-4">
             <span class="fa-stack fa-4x">
               <i class="fas fa-circle fa-stack-2x text-primary"></i>
               <i class="fas fa-mobile-alt fa-stack-1x fa-inverse"></i>
             </span>
             <h4 class="service-heading">Responsive</h4>
             <p class="text-muted">We provide responive sites by default (with the option to turn it off).</p>
           </div>
           <div class="col-md-4">
             <span class="fa-stack fa-4x">
               <i class="fas fa-circle fa-stack-2x text-primary"></i>
               <i class="fas fa-cog fa-stack-1x fa-inverse"></i>
             </span>
             <h4 class="service-heading">In house extensions</h4>
             <p class="text-muted">
               We have designed some of the most cutting edge extensions to help us grow and become one of the world's best wiki farm! Our extensions go from creating wikis to manging wikis from a special page. It devoles power to the admin of the wiki requiring little oversee from the stewards or tech team. It improves community say over how there wiki is ran.
             </p>
           </div>
           <div class="col-md-4">
             <span class="fa-stack fa-4x">
               <i class="fas fa-circle fa-stack-2x text-primary"></i>
               <i class="fas fa-angle-double-right fa-stack-1x fa-inverse"></i>
             </span>
             <p class="text-muted">And many more features!</p>
           </div>
         </div>

        </div>
    </section>

    <section class="page-section text-white mb-0" id="about">
      <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
        <div class="divider-custom divider-light"></div>
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <p class="lead">In July 2015, John Lewis and Ferran Tufan created a new wiki farm - named Miraheze. Through the use of community crowdfunding and personal investment, Miraheze officially went live in August of 2015. Over the years, the project has grown immensely to be one of the largest and most recognisable wiki farms specialising in MediaWiki on offer. Despite the success and evolution, one aspect of Miraheze never changed - formal existence. In November 2019, Miraheze become an offical Non-Profit called Miraheze Limited.</p>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0"></div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Social Media</h4>
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
            Miraheze Limited <br />
            A company limited by guarantee registered in England and Wales company no. 12323854  <br />
            Except where otherwise noted, the content of this site is licensed under a <a href="https://creativecommons.org/licenses/by-sa/4.0/">Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)</a>.

            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://meta.miraheze.org/wiki/Terms_of_Use">Terms of Use</a>
              </li>
              <li class="list-inline-item">
                <a href="https://meta.miraheze.org/wiki/Privacy_Policy">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="https://meta.miraheze.org/wiki/Meta:General_disclaimer">Disclaimers</a>
              </li>
              <li class="list-inline-item">
                <a href="https://meta.miraheze.org/wiki/Privacy_Policy#4._Cookies">Cookie Statement</a>
              </li>
              <li class="list-inline-item">
                <a href="https://meta.miraheze.org/wiki/Help_center">Contact Us</a>
              </li>
              <li class="list-inline-item">
                <a href="https://meta.miraheze.org/wiki/FAQ">FAQ</a>
              </li>
            </ul>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://github.com/miraheze/landing">Translate this page</a>
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
