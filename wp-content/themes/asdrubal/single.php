<?php
get_header();
?>

<div class="generico">

  <?php if (function_exists('asdrubal_breadcrumbs')) { asdrubal_breadcrumbs(); } ?>

  <h1><?php the_title(); ?></h1>

  <section id="contenido">
    <?php the_content(); ?>
  </section>

</div>

<?php
get_footer();
?>
