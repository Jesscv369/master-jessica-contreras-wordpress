<?php
add_theme_support('post-thumbnails');

$plantillas = __DIR__ . '/plantillas/';

function cuatropost() {
  $plantillas = __DIR__ . '/plantillas/';
  include $plantillas . 'cuatropost.php';
}
add_shortcode('latest_posts', 'cuatropost');


/**
 * CSS global del tema
 */
add_action('wp_enqueue_scripts', function () {

  wp_enqueue_style(
    'asdrubal-style',
    get_stylesheet_uri(),
    [],
    filemtime(get_stylesheet_directory() . '/style.css')
  );

  // Fix doble scroll (mínimo)
  wp_add_inline_style('asdrubal-style', '
    html { overflow-y: auto !important; }
    body { overflow: visible !important; }
  ');

}, 20);


/**
 * CSS específico: Quiénes Somos
 */
add_action('wp_enqueue_scripts', function () {

  if (is_page('quienes-somos')) {
    wp_enqueue_style(
      'quienes-somos-css',
      get_stylesheet_directory_uri() . '/assets/css/quienes-somos.css',
      ['asdrubal-style'],
      filemtime(get_stylesheet_directory() . '/assets/css/quienes-somos.css')
    );
  }

}, 30);


/**
 * JS (Carrusel + opcional header)
 */
add_action('wp_enqueue_scripts', function () {

  wp_enqueue_script(
    'asdrubal-carousel',
    get_template_directory_uri() . '/js/carousel.js',
    [],
    filemtime(get_stylesheet_directory() . '/js/carousel.js'),
    true
  );

  // (Opcional) si ya creaste js/header-glass.js, descomenta:
  /*
  wp_enqueue_script(
    'asdrubal-header-glass',
    get_template_directory_uri() . '/js/header-glass.js',
    [],
    filemtime(get_stylesheet_directory() . '/js/header-glass.js'),
    true
  );
  */

}, 40);
