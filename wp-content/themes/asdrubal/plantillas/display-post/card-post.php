<div class="post-card">
  <a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>">

    <?php if ( has_post_thumbnail() ) : ?>
      <div class="post-image">
        <?php the_post_thumbnail('medium'); ?>
      </div>
    <?php endif; ?>

    <div class="post-content">
      <h3 class="post-name"><?php the_title(); ?></h3>
      <div class="post-desc"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></div>
    </div>

  </a>
</div>
