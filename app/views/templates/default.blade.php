
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FRC Team 28 : : @yield('title')</title>
        <link id="data-uikit-theme" rel="stylesheet" href="assets/css/uikit.docs.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>

    <body class="tm-background">

        <nav class="tm-navbar uk-navbar uk-navbar-attached">
            <div class="uk-container uk-container-center">

                <a class="uk-navbar-brand uk-hidden-small" href="/">FRC Team 28</a>

                <ul class="uk-navbar-nav uk-hidden-small">
                    <li {{ (Request::is('blog') ? ' class="uk-active"' : '') }}><a href="{{{ URL::to('blog') }}}">Blog</a></li>
                    <li {{ (Request::is('about') ? ' class="uk-active"' : '') }}>
                      <a href="{{{ URL::to('about') }}}">About</a></li>
                    <li {{ (Request::is('sponsors') ? ' class="uk-active"' : '') }}><a href="{{{ URL::to('sponsors') }}}">Sponsors</a></li>
                    <li><a href="{{{ URL::to('contact-us') }}}">Contact Us</a></li>
                </ul>

                <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>

            </div>

        </nav>

        <div class="tm-middle">
            <div class="uk-container uk-container-center">

                <div class="uk-grid" data-uk-grid-margin>
                    
                    
                    <div class="tm-main uk-width-9-10 uk-push-1-10">
                    @yield('content')
                    </div>

                </div>

            </div>

        </div>

        <div class="tm-footer">
            <div class="uk-container uk-container-center uk-text-center">

                <ul class="uk-subnav uk-subnav-line">
                    <li><a href="http://www.github.com/frc-team-28">GitHub</a></li>
                    <li><a href="http://www.usfirst.org/roboticsprograms/frc">FIRST</a></li>
                    <li><a href="https://www.facebook.com/pages/FRC-Team-28/135554613182732">Facebook</a></li>
                </ul>

                <div class="uk-panel">
                    <p>Made by FRC Team 28 with the Generous Support of <a href="http://www.prismic.io">Prismic.io</a>
                    <br>
                    Licensed under <a href="http://creativecommons.org/licenses/by/4.0">Creative Commons license</a>.</p>
                    <a href="http://www.prismic.io"><img src="assets/img/prismicio.png" width="90" height="30" title="Prismic.io" alt="Prismic.io"></a>
                </div>

            </div>
        </div>
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/uikit.min.js"></script>
    </body>
</html>