<?php
//include_once 'header.php';
get_header();
?>

<div>
    <div class="contenedortitulo">
        <h1>
            <?php the_title();?>
        </h1>
    </div>

    <section id="contenido">
        <?php echo the_content();?>
    </section>

    <section class="blog-home">
        <div class="blog-home-header">
            <h2 class="blog-home-title">Últimos artículos</h2>
            <p class="blog-home-subtitle">Revisa nuestras publicaciones más recientes</p>
        </div>

        <?php
            include $plantillas .'cuatropost.php';
        ?>
    </section>

</div>

<?php 
//include_once 'footer.php';
get_footer();
?>