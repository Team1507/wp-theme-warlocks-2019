<? ob_start("ob_gzhandler"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.custom.css">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontawesome.all.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">

        <title><?php echo trim(wp_title( '', false, 'right' )) == "" ? "Warlocks 1507" : "Warlocks 1507 - ".wp_title( '', false, 'right' ); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="header-banner-image d-none d-lg-block d-print-none">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-12 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/header-white.png" />
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-bg-blue">
            <div class="container">
                <a class="navbar-brand d-md-block d-lg-none" href="#">Warlocks 1507</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php 
                        wp_nav_menu(array(
                            'container_class' => 'main-nav',
                            'theme_location' => 'primary',
                            'container' => false,
                            'items_wrap' => '<ul class="navbar-nav">%3$s</ul>',
                            'walker' => new Header_Nav_Menu()
                        )); 
                    ?>
                </div>
                <div class="pull-right d-none d-lg-block">
                    <a href="https://www.facebook.com/Warlocks1507" target="_blank" class="navbar-social-links" alt="Facebook"><span class="fab fa-facebook-f"> </span></a>
                    <a href="https://twitter.com/Warlocks1507" target="_blank" class="navbar-social-links" alt="Twitter"><span class="fab fa-twitter"> </span></a>
                    <a href="https://www.instagram.com/warlocks_1507" target="_blank" class="navbar-social-links" alt="Instagram"><span class="fab fa-instagram"> </span></a>
                    <a href="https://www.youtube.com/channel/UCA-tgW0KfEPSf3QUVkiKPJQ" target="_blank" class="navbar-social-links" alt="YouTube"><span class="fab fa-youtube"> </span></a>
                </div>
            </div>
        </nav>