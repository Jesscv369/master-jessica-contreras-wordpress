<?php get_header(); ?>

<main class="home">

  <!-- HERO -->
  <section class="home-hero" id="top">
    <div class="home-hero__inner">
      <h1 class="home-hero__title">SEO Técnico Avanzado</h1>

      <p class="home-hero__subtitle">
        Optimización técnica, arquitectura SEO y auditorías profundas para que tu sitio cargue mejor,
        indexe bien y escale tráfico orgánico con bases sólidas.
      </p>
      <p class="hero-microvalue">
        Optimizaciones técnicas basadas en datos y KPI’s medibles
      </p>


      <div class="home-hero__cta">
        <a class="btn btn-primary" href="/contacto/">Solicitar auditoría</a>
      </div>
    </div>
  </section>

  <!-- SERVICIOS -->
  <section id="servicios" class="services">
  <div class="services-inner">

    <header class="services-header">
      <h2 class="services-title">Servicios de SEO Técnico</h2>
      <p class="services-subtitle">
        Implementaciones técnicas orientadas a performance, escalabilidad y visibilidad orgánica sostenible.
      </p>
    </header>

    <div class="services-grid">

      <article class="service-card">
        <div class="service-card__top">
            <img class="service-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/iconos-servicios/audit.svg" alt="" aria-hidden="true">
            <h3>
                <a href="/auditorias-tecnicas/" class="service-card__link">
                    Auditorías Técnicas
                </a>
            </h3>
        </div>
        <p>
          Diagnóstico profundo de arquitectura, indexación, Core Web Vitals, logs y rastreo para detectar cuellos de botella reales.
        </p>
      </article>

      <article class="service-card">
        <div class="service-card__top">
            <img class="service-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/iconos-servicios/international.svg" alt="" aria-hidden="true">
            <h3>
                <a href="/seo-internacional/" class="service-card__link">
                    SEO Internacional
                </a>
            </h3>
        </div>
        <p>
          Estrategias para sitios multi-país y multi-idioma: hreflang, estructura, geotargeting y control de canibalizaciones.
        </p>
      </article>

      <article class="service-card">
        <div class="service-card__top">
            <img class="service-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/iconos-servicios/local.svg" alt="" aria-hidden="true">
            <h3>
                <a href="/seo-local/" class="service-card__link">    
                    SEO Local
                </a>
            </h3>   
        </div>  
        <p>
          Optimización técnica y semántica para negocios locales: landings, entidades, señales locales y visibilidad geográfica.
        </p>
      </article>
      <article class="service-card">        
        <div class="service-card__top">
            <img class="service-icon" src="<?php echo get_template_directory_uri(); ?>/assets/icons/iconos-servicios/migracion.svg" alt="" aria-hidden="true">
            <h3>
                <a href="/reportes-seo/" class="service-card__link">
                    Migraciones SEO
                </a>
            </h3>  
        </div>
        <p>
          Migraciones SEO seguras basadas en auditoría previa, control de redirecciones e indexación, minimizando riesgos técnicos y preservando señales orgánicas clave.
        </p>
      </article>
    </div>
     <!-- CTA SERVICIOS -->
    <div class="services-cta">
      <div class="services-cta__box">
        <h3 class="services-cta__title">
          ¿Quieres una auditoría técnica con hallazgos accionables?
        </h3>

        <p class="services-cta__text">
          Te entrego un diagnóstico priorizado por impacto (SEO + performance)
          con recomendaciones claras y KPIs medibles.
        </p>

        <div class="services-cta__actions">
          <a class="btn btn-primary" href="/contacto/">
            Solicitar auditoría
          </a>
          <a class="btn btn-secondary is-link" href="#servicios">Ver servicios <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- BLOG / ÚLTIMOS ARTÍCULOS -->
  <section class="home-blog" id="blog">
    <div class="home-section__header">
      <h2 class="home-section__title">Artículos de SEO Técnico</h2>
      <p class="home-section__subtitle">
        Contenido y guías prácticas para mejorar performance, indexación y posicionamiento.
      </p>
    </div>

    <!-- Reutilizamos tu bloque de posts (cuatropost.php) -->
    <?php
      // OJO: $plantillas viene desde functions.php como variable global
      global $plantillas;
      include $plantillas . 'cuatropost.php';
    ?>

    <div class="home-blog__cta">
      <a class="btn btn-primary" href="/blog/">Ver todos los artículos</a>
    </div>
  </section>

</main>
<?php get_template_part('plantillas/cta-final');?>
<?php get_footer(); ?>
