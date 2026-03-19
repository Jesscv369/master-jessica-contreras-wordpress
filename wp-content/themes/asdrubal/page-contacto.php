<?php
/**
 * Template Name: Contacto
 */
get_header();
?>

<main class="contact-page">

  <section class="contact-hero">
    <div class="container">

      <?php if (function_exists('asdrubal_breadcrumbs')) : ?>
        <?php asdrubal_breadcrumbs(); ?>
      <?php else : ?>
        <nav class="srv-breadcrumbs" aria-label="Breadcrumb">
          <ol itemscope itemtype="https://schema.org/BreadcrumbList">

            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>">
                <span itemprop="name">Inicio</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>

            <li class="srv-breadcrumbs__sep" aria-hidden="true">/</li>

            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
              <span itemprop="name"><?php echo esc_html(get_the_title()); ?></span>
              <meta itemprop="position" content="2" />
            </li>

          </ol>
        </nav>
      <?php endif; ?>

      <h1 class="contact-hero__title">Hablemos de tu sitio web</h1>
      <p class="contact-hero__subtitle">
        Si sospechas problemas técnicos, caída de tráfico o necesitas claridad para priorizar, lo revisamos con foco en impacto.
      </p>

    </div>
  </section>

  <section class="contact-content">
    <div class="container">

      <div class="contact-grid">

        <!-- COLUMNA IZQ -->
        <aside class="contact-info">

          <h2 class="contact-info__title">¿En qué te puedo ayudar?</h2>

          <ul class="contact-info__list">
            <li>Diagnóstico técnico SEO (indexación, rastreo, arquitectura)</li>
            <li>Core Web Vitals y performance real</li>
            <li>Migraciones (plan, checklist, control de riesgos)</li>
            <li>SEO internacional y hreflang</li>
            <li>Auditoría y roadmap de prioridades</li>
          </ul>

          <p class="contact-info__note">
            Respondo personalmente. Si me compartes tu URL y contexto, puedo llegar con un primer análisis a la llamada.
          </p>

        </aside>

        <!-- COLUMNA DER -->
        <section class="contact-form" aria-label="Formulario de contacto">

          <h2 class="contact-form__title">Cuéntame de tu proyecto</h2>
          <p class="contact-form__subtitle">Te respondo en 24–48 hrs hábiles.</p>

          <div class="contact-form__box">
            <?php echo do_shortcode('[contact-form-7 id="ac84386" title="Contact form 1"]'); ?>
          </div>

          <p class="contact-form__legal">
            Al enviar este formulario aceptas que te contacte para coordinar el diagnóstico.
          </p>

        </section>

      </div>

    </div>
  </section>

  <?php get_template_part('plantillas/cta-final'); ?>

</main>

<?php
get_footer();
?>
