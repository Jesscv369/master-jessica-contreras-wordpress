<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta charset="UTF-8" />
        <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type='text/css' media='all'> -->

        <?php /*
            <link rel="stylesheet" href="/css/estilo.css">
            <link href="/css/fonts.css" rel="stylesheet">
            include_once $_SERVER['DOCUMENT_ROOT'].'/assets/functions.php';
     */
    wp_head();
    ?>

    
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <header class="site-header">
            <div class="header-inner">
                <a class="site-logo" href="/">
                    <img src="/imagenes/logo.svg" height="50" width="80" alt="SEOAdvantage">
                    <span class="site-title">SEOAdvantage</span>
                </a>
            
                <nav class="main-nav" aria-label="Menú principal">
                    <ul class="menu">
                        <li>
                            <a href="/" class="<?php echo is_front_page() ? 'active' : ''; ?>">Home</a>
                        </li>

                        <li>
                            <a href="/quienes-somos/" class="<?php echo is_page('quienes-somos') ? 'active' : ''; ?>">Quienes Somos</a>
                        </li>

                        <li>
                            <a href="/blog/" class="<?php echo ( is_home() || is_page('blog') || is_singular('post') || is_category() || is_tag() || is_date() ) ? 'active' : ''; ?>">Blog</a>

                        </li>

                        <li class="nav-cta">
                            <a href="/contacto/" class="<?php echo is_page('contacto') ? 'active' : ''; ?>">Contacto</a>
                        </li>
                    </ul>
                </nav>


            <!--<nav class="main-nav">
                <ul class="menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/quienes-somos/">Quienes Somos</a></li>
                    <li><a href="/blog/">Blog</a></li>
                    <li class="nav-cta"><a href="/contacto/">Contacto</a></li>
                </ul>
            </nav>-->

            </div>
        </header>

