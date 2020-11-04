<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INdex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- addding the cdn's -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>
<header>
    <div class="headerTop">
        <div class="container">
            <div class="flexed">
                <div class="socialIcons">
                    <ul>
                        <li><a href="<?php the_field('facebook', 'options'); ?>"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php the_field('twitter', 'options'); ?>"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php the_field('instagram', 'options'); ?>"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="<?php the_field('pinterest', 'options'); ?>"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="timingFonenUmber">
                    <ul>
                        <li><?php the_field('timingOffice', 'options'); ?></li>
                        <li><a href="tel:<?php the_field('phoneNumber', 'options'); ?>">
                            <i class="fa fa-phone"></i><?php the_field('phoneNumber', 'options'); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="headerMain">
        <div class="container">
            <div class="headerInnerContainer flexed alignCenter justifyB">
                <div class="logoContainer">
                    <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
                    <a href="<?php echo site_url(); ?>"><img src="<?php echo $image[0]; ?>"></a>
                </div>
                <div class="mainMenuContainer">
                    <div class="menuContainers">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    </div>
                    <div class="menuContainers">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>