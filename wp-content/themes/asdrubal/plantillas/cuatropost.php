<section class="blog-carousel">
  <button class="carousel-btn prev" type="button" aria-label="Anterior">‹</button>

  <div class="carousel-viewport">
    <div class="carousel-track">
      <?php
        $args = array(
          'post_type' => 'post',
          'orderby' => 'date',
          'order' => 'DESC',
          'posts_per_page' => -1,
        );

        $the_query = new WP_Query($args);

        while ( $the_query->have_posts() ) {
          $the_query->the_post();
          include $plantillas . '/display-post/card-post.php';
        }

        wp_reset_postdata();
      ?>
    </div>
  </div>

  <button class="carousel-btn next" type="button" aria-label="Siguiente">›</button>
</section>
