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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/isotipo.svg" height="100" width="100" alt="SEOTech">
                <span class="site-title">SEO</span>
                <span class="site-title2">Tech</span>
              </a>

              <!-- Botón mobile -->
              <button class="nav-toggle" type="button" aria-label="Abrir menú" aria-expanded="false" aria-controls="site-nav">
                <span class="nav-toggle__bar"></span>
                <span class="nav-toggle__bar"></span>
                <span class="nav-toggle__bar"></span>
              </button>
              <!-- Menú -->
              <nav id="site-nav" class="main-nav" aria-label="Menú principal">
                <ul class="menu">
                  <li><a href="<?php echo esc_url( home_url('/') ); ?>" class="<?php echo is_front_page() ? 'active' : ''; ?>">Home</a></li>
                              
                  <li><a href="<?php echo esc_url( home_url('/servicios/') ); ?>" class="<?php echo is_page('servicios') ? 'active' : ''; ?>">Servicios</a></li>
              
                  <li><a href="<?php echo esc_url( home_url('/sobre-mi/') ); ?>" class="<?php echo is_page('sobre-mi') ? 'active' : ''; ?>">Sobre mí</a></li>
              
                  <li>
                    <a href="<?php echo esc_url( home_url('/blog/') ); ?>"
                    class="<?php echo ( is_home() || is_page('blog') || is_singular('post') || is_category() || is_tag() || is_date() ) ? 'active' : ''; ?>">
                    Blog
                    </a>                  
                  </li>
                  <li class="nav-cta">
                    <a href="<?php echo esc_url( home_url('/contacto/') ); ?>" class="<?php echo is_page('contacto') ? 'active' : ''; ?>">Contacto</a>
                  </li>
                </ul>
              </nav>


            </div>
        </header>


