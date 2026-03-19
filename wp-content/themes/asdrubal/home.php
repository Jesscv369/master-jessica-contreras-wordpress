<?php
/**
 * home.php — Blog (Posts page)
 * Theme: asdrubal
 */
get_header();
?>

<main id="primary" class="site-main page-blog">

  <!-- HERO -->
  <section class="blog-hero">
    <div class="container">

      <?php
      // Breadcrumbs (mantén consistencia: si ya tienes función global úsala; si no, dejamos el mismo patrón que Servicios)
      if (function_exists('asdrubal_breadcrumbs')) {
        echo '<div class="srv-breadcrumbs blog-breadcrumbs">';
        asdrubal_breadcrumbs();
        echo '</div>';
      } else {
        $posts_page_id = (int) get_option('page_for_posts');
        $blog_title    = $posts_page_id ? get_the_title($posts_page_id) : 'Blog';
        ?>
        <nav class="srv-breadcrumbs blog-breadcrumbs" aria-label="Breadcrumb">
          <ol itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>">
                <span itemprop="name">Inicio</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>

            <li class="srv-breadcrumbs__sep" aria-hidden="true">/</li>

            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
              <span itemprop="name"><?php echo esc_html($blog_title); ?></span>
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </nav>
        <?php
      }
      ?>

      <?php
      $posts_page_id = (int) get_option('page_for_posts');
      $blog_title    = $posts_page_id ? get_the_title($posts_page_id) : 'Blog';
      ?>

      <h1 class="blog-title"><?php echo esc_html($blog_title); ?></h1>
      <p class="blog-subtitle">Contenido de SEO técnico y guías para mejorar rendimiento, SEO y estructura.</p>

    </div>
  </section>
<!-- GRID POSTS -->
<section id="posts" class="blog-grid">
  <div class="container">

    <header class="blog-section-head">
      <h2>Artículos de SEO Técnico</h2>
      <p>Artículos pensados para quienes quieren aprender bien y profundizar más.</p>
    </header>

    <?php if (have_posts()) : ?>

      <div class="blog-cards">

        <?php while (have_posts()) : the_post(); ?>

          <article <?php post_class('blog-card'); ?>>

            <a class="blog-card__link" href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">

              <?php if (has_post_thumbnail()) : ?>
                <div class="blog-card__thumb">
                  <?php the_post_thumbnail('large'); ?>
                </div>
              <?php endif; ?>

              <div class="blog-card__body">

                <div class="blog-card__meta">
                  <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                    <?php echo esc_html(get_the_date()); ?>
                  </time>
                </div>

                <h3 class="blog-card__title"><?php the_title(); ?></h3>

                <p class="blog-card__excerpt">
                  <?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?>
                </p>

                <span class="blog-card__cta">Leer artículo →</span>

              </div>
            </a>

          </article>

        <?php endwhile; ?>

      </div>

      <nav class="blog-pagination" aria-label="Paginación">
        <?php
        echo paginate_links(array(
          'mid_size'  => 1,
          'prev_text' => '← Anterior',
          'next_text' => 'Siguiente →',
        ));
        ?>
      </nav>

    <?php else : ?>

      <div class="blog-empty">
        <h2>No hay artículos todavía</h2>
        <p>Cuando publiques posts, aparecerán aquí automáticamente.</p>
      </div>

    <?php endif; ?>

  </div>
</section>



  <!-- CTA FINAL (reutiliza tu partial existente) -->
  <section class="blog-cta">
    <?php get_template_part('plantillas/cta-final'); ?>
  </section>

</main>

<?php get_footer(); ?>
