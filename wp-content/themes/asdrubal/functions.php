<?php
add_theme_support('post-thumbnails');

$plantillas = __DIR__ . '/plantillas/';

function cuatropost() {
  $plantillas = __DIR__ . '/plantillas/';
  include $plantillas . 'cuatropost.php';
}
add_shortcode('latest_posts', 'cuatropost');


/**
 * Breadcrumbs (global, excepto Home) + Schema.org BreadcrumbList
 */
function asdrubal_breadcrumbs() {
  if ( is_front_page() ) return;

  $items = [];
  $items[] = [
    'url'  => home_url('/'),
    'name' => 'Inicio',
  ];

  // Página / Post
  if ( is_page() || is_single() ) {
    $items[] = [
      'url'  => get_permalink(),
      'name' => get_the_title(),
    ];
  }
  // Archivo Blog si existe page_for_posts
  elseif ( is_home() ) {
    $blog_id = (int) get_option('page_for_posts');
    if ($blog_id) {
      $items[] = [
        'url'  => get_permalink($blog_id),
        'name' => get_the_title($blog_id),
      ];
    } else {
      $items[] = [
        'url'  => '',
        'name' => 'Blog',
      ];
    }
  }
  // Categoría
  elseif ( is_category() ) {
    $cat = get_queried_object();
    $items[] = [
      'url'  => get_category_link($cat),
      'name' => single_cat_title('', false),
    ];
  }
  // Tag
  elseif ( is_tag() ) {
    $tag = get_queried_object();
    $items[] = [
      'url'  => get_tag_link($tag),
      'name' => single_tag_title('', false),
    ];
  }
  // Autor
  elseif ( is_author() ) {
    $items[] = [
      'url'  => get_author_posts_url( get_the_author_meta('ID') ),
      'name' => get_the_author(),
    ];
  }
  // Búsqueda
  elseif ( is_search() ) {
    $items[] = [
      'url'  => '',
      'name' => 'Búsqueda',
    ];
  }
  // 404
  elseif ( is_404() ) {
    $items[] = [
      'url'  => '',
      'name' => 'Página no encontrada',
    ];
  }
  // Fallback
  else {
    $items[] = [
      'url'  => '',
      'name' => wp_get_document_title(),
    ];
  }

  echo '<nav class="srv-breadcrumbs" aria-label="Breadcrumb"><ol itemscope itemtype="https://schema.org/BreadcrumbList">';

  $pos = 1;
  $total = count($items);

  foreach ($items as $i => $item) {
    $is_last = ($i === $total - 1);

    echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"' . ($is_last ? ' aria-current="page"' : '') . '>';

    if (!$is_last && !empty($item['url'])) {
      echo '<a itemprop="item" href="' . esc_url($item['url']) . '"><span itemprop="name">' . esc_html($item['name']) . '</span></a>';
    } else {
      echo '<span itemprop="name">' . esc_html($item['name']) . '</span>';
    }

    echo '<meta itemprop="position" content="' . esc_attr($pos) . '" />';
    echo '</li>';

    if (!$is_last) {
      echo '<li class="srv-breadcrumbs__sep" aria-hidden="true">/</li>';
    }

    $pos++;
  }

  echo '</ol></nav>';
}


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

  wp_enqueue_script(
    'asdrubal-header-glass',
    get_template_directory_uri() . '/js/header-glass.js',
    [],
    filemtime(get_stylesheet_directory() . '/js/header-glass.js'),
    true
  );

  wp_enqueue_script(
    'asdrubal-nav-mobile',
    get_stylesheet_directory_uri() . '/js/abre-menu-mobile.js',
    [],
    filemtime(get_stylesheet_directory() . '/js/abre-menu-mobile.js'),
    true
  );

}, 40);
