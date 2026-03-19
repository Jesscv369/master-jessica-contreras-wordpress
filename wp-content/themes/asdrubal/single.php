<?php
get_header();

if (have_posts()) : while (have_posts()) : the_post();

$blog_page_id = (int) get_option('page_for_posts');
$blog_url     = $blog_page_id ? get_permalink($blog_page_id) : home_url('/blog/');
$blog_label   = $blog_page_id ? get_the_title($blog_page_id) : 'Blog';

/**
 * Editor clásico: reordenar a
 * H1 -> fecha -> lead (primer párrafo con texto) -> primera imagen -> resto
 *
 * - No usamos featured image para evitar duplicación.
 * - La imagen siempre está dentro del contenido del editor.
 */
$content_html = apply_filters('the_content', get_the_content());

$lead_html  = '';
$image_html = '';
$rest_html  = $content_html;

/**
 * 1) Capturar la PRIMERA imagen del contenido:
 *    - <figure ...>...</figure>
 *    - o <p><img ...></p> (típico de editor clásico)
 */
if (preg_match('/<figure\b[^>]*>.*?<\/figure>/is', $rest_html, $mFig)) {
  $image_html = trim($mFig[0]);
  $rest_html  = preg_replace('/<figure\b[^>]*>.*?<\/figure>/is', '', $rest_html, 1);
} elseif (preg_match('/<p\b[^>]*>\s*(?:<a\b[^>]*>\s*)?<img\b[^>]*>(?:\s*<\/a>)?\s*<\/p>/is', $rest_html, $mImgP)) {
  $image_html = trim($mImgP[0]);
  $rest_html  = preg_replace('/<p\b[^>]*>\s*(?:<a\b[^>]*>\s*)?<img\b[^>]*>(?:\s*<\/a>)?\s*<\/p>/is', '', $rest_html, 1);
} elseif (preg_match('/(?:<a\b[^>]*>\s*)?<img\b[^>]*>(?:\s*<\/a>)?/is', $rest_html, $mImg)) {
  // fallback si la imagen viene suelta
  $image_html = trim($mImg[0]);
  $rest_html  = preg_replace('/(?:<a\b[^>]*>\s*)?<img\b[^>]*>(?:\s*<\/a>)?/is', '', $rest_html, 1);
}

/**
 * 2) Capturar el PRIMER <p> con texto (no vacío) desde el contenido restante
 *    (aunque originalmente estuviera después de la imagen)
 */
if (preg_match_all('/<p\b[^>]*>.*?<\/p>/is', $rest_html, $pm)) {
  foreach ($pm[0] as $p) {
    $candidate = trim($p);

    // Ignorar párrafos que sean SOLO una imagen/espacios
    $plain = trim(wp_strip_all_tags($candidate));
    if ($plain !== '') {
      $lead_html = $candidate;
      $rest_html = preg_replace('/' . preg_quote($candidate, '/') . '/is', '', $rest_html, 1);
      break;
    }
  }
}

?>

<article class="single-article">
  <div class="single-article__inner container">

    <nav class="srv-breadcrumbs" aria-label="Breadcrumb">
      <ol itemscope itemtype="https://schema.org/BreadcrumbList">

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>">
            <span itemprop="name">Inicio</span>
          </a>
          <meta itemprop="position" content="1" />
        </li>

        <li class="srv-breadcrumbs__sep" aria-hidden="true">/</li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="<?php echo esc_url($blog_url); ?>">
            <span itemprop="name"><?php echo esc_html($blog_label); ?></span>
          </a>
          <meta itemprop="position" content="2" />
        </li>

        <li class="srv-breadcrumbs__sep" aria-hidden="true">/</li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
          <span itemprop="name"><?php the_title(); ?></span>
          <meta itemprop="position" content="3" />
        </li>

      </ol>
    </nav>

    <header class="single-article__header">
      <h1 class="single-article__title"><?php the_title(); ?></h1>

      <div class="single-article__meta">
        <span class="single-article__meta-item">
          <span class="single-article__meta-ico" aria-hidden="true">🕒</span>
          <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
            <?php echo esc_html(get_the_date()); ?>
          </time>
        </span>
      </div>

      <?php if (!empty($lead_html)) : ?>
        <div class="single-article__lead">
          <?php echo $lead_html; ?>
        </div>
      <?php endif; ?>
    </header>

    <?php if (!empty($image_html)) : ?>
      <div class="single-article__hero-media">
        <?php echo $image_html; ?>
      </div>
    <?php endif; ?>

    <div class="single-article__content">
      <?php echo $rest_html; ?>
    </div>

  </div>
</article>

  <!-- CTA FINAL -->
  <?php get_template_part('plantillas/cta-final'); ?>

<?php
endwhile; endif;
get_footer();
?>