<?php
get_header();
?>

<div>

  <?php if (function_exists('asdrubal_breadcrumbs')) { asdrubal_breadcrumbs(); } ?>

  <div class="contenedortitulo">
    <h1><?php the_title(); ?></h1>
  </div>

  <section id="contenido">
    <?php the_content(); ?>
  </section>

</div>

<?php
get_footer();
?>
