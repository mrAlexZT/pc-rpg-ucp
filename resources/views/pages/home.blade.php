<!DOCTYPE html>
<html>
    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <title>PC:RPG</title>
        <meta name="keywords" content="RPG Paradise City SAMP SA:MP GTA San Andreas" />
        <meta name="description" content="Paradise City RPG - SA:MP Server">
        <meta name="author" content="Paradise">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="‪#009dc7">

        <!-- Stylesheets -->
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
        <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">
        <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/custom.css">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicon.png">
    </head>
    <body class="external-page auth-body sb-l-c sb-r-c">
        <div id="main" class="animated fadeIn">
            <div class="cs-page-content pull-center">
                <img src="assets/img/logos/logo-big.png" class="cs-page-logo text-center" style="width: 50%">
                <h2 class="cs-page-title">GT:MP - SA:MP RPG SERVER</h2>
                <a href="{{ url('/dashboard') }}" class="btn btn-lg btn-play"><i class="fa fa-angle-right mr5"></i> SA:MP</a>
                <a href="#" class="btn btn-lg btn-play ml20 disabled"><i class="fa fa-angle-right mr5"></i> GT:MP</a>
                <br />
                <div class="btn-group">
                    <a href="{{ url('/aboutus') }}" class="btn btn-lg btn-play-alt"><span class="pull-left fa fa-info-circle mr5"></span> SOBRE O PC:RPG</a>
                    <a href="https://discord.gg/hpvRGZe" class="btn btn-lg btn-play-alt"><span class="pull-left fa fa-comments-o mr5"></span> DISCORD</a>
                    <a href="http://forum.pc-rpg.com/" class="btn btn-lg btn-play-alt"><span class="pull-left fa fa-group mr5"></span> FÓRUM</a>
                </div>
            </div>
            <section id="content_wrapper">
                <div id="canvas-wrapper">
                    <canvas id="demo-canvas"></canvas>
                </div>
            </section>
            <!-- End: Content -->
        </div>
        <!-- Begin: Page Footer -->
        <footer id="auth-footer" class="affix" style="z-index: 1">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="footer-since">DESDE <b>2012</b></span>
                    <span class="footer-separator">|</span>
                    <a href="#" class="link-unstyled">PARADISE DEVS</a>
                    <span class="footer-separator">|</span>
                    <span class="footer-poweredby">FEITO COM <a href="https://gitlab.com/" class="link-unstyled"><i class="fa fa-gitlab ml5 mr5"></i></a> E <i class="fa fa-heart-o ml5 mr5 text-danger"></i></span>
                </div>
            </div>
        </footer>
        <!-- End: Page Footer -->
        <audio src="{{ URL::asset('assets/sounds/Koresma_-_Bridges.mp3') }}" loop autoplay></audio>
        <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
        <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
        <script src="vendor/plugins/canvasbg/canvasbg.js"></script>
        <script src="assets/js/utility/utility.js"></script>
        <script src="assets/js/demo/demo.js"></script>
        <script src="https://use.fontawesome.com/748a1b45e6.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/custom_index.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
              "use strict";
              Core.init();
              Demo.init();
              CanvasBG.init({
                Loc: {
                  x: window.innerWidth / 4.1,
                  y: window.innerHeight / 4.1
                },
              });
            });
        </script>
    </body>
</html>
