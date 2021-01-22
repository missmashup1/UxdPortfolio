<?php
    $section = $_GET["topic"];
    $sub = $_GET["sub"];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?=$section?></title>
        <style>
            body {visibility: hidden}
        </style>

        <script type="text/javascript" src="../core/scripts/load-css.js"></script>
        <script type="text/javascript">
            window.addEventListener('load', function () {
                cssLoader.loadCssLinks([
                    '<?= "../assets/styles/main.topic.css?c=" . rand(); ?>',
                    '<?= "../assets/styles/" . $section . ".css?c=" . rand(); ?>',
                    '../assets/styles/sticky-header.css?c=<?=rand()?>',
                    '../core/core.css?c=<?=rand()?>'
                ], function () {
                    document.body.style.visibility = 'visible';
                });
            });
        </script>

        <!-- Core CSS file -->
        <link rel="stylesheet" href="../core/photoswipe/photoswipe.css">

        <!-- Skin CSS file (styling of UI - buttons, caption, etc.)
             In the folder of skin CSS file there are also:
             - .png and .svg icons sprite,
             - preloader.gif (for browsers that do not support CSS animations) -->
        <link rel="stylesheet" href="../core/photoswipe/default-skin/default-skin.css">

        <!-- Core JS file -->
        <script type="text/javascript" src="../core/photoswipe/photoswipe.js"></script>

        <!-- UI JS file -->
        <script type="text/javascript" src="../core/photoswipe/photoswipe-ui-default.js"></script>

        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

        <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="../assets/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../assets/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <div class="main-topic <?=$_GET["topic"]?>" id="top">
            <?php include "components/sticky.header.php"; ?>
            <div class="main-topic-content">
                <?php include "components/$section.php"; ?>

                <div class="up">
                    <a href="#top">
                        <img src="/uxd/assets/images/up.png" class="up-arrow">
                    </a>
                </div>
            </div>
        </div>

        <footer class="footer font-600">
            &copy;CALLMEMASHA | product design portfolio
        </footer>

    </body>
</html>




