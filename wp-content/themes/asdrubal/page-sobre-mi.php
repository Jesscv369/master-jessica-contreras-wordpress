<?php
/**
 * Template Name: Sobre mí
 * Template Post Type: page
 */
get_header();
?>

<main id="primary" class="site-main page-sobre-mi">

  <!-- HERO -->
  <section class="about-hero">
    <div class="container">

      <div class="about-hero__grid">
        <div class="about-hero__content">
             <!-- BREADCRUMBS (misma clase que Servicios para reutilizar estilos) -->
      <nav class="srv-breadcrumbs" aria-label="Breadcrumb">
        <ol itemscope itemtype="https://schema.org/BreadcrumbList">

          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="<?php echo esc_url( home_url('/') ); ?>">
              <span itemprop="name">Inicio</span>
            </a>
            <meta itemprop="position" content="1" />
          </li>

          <li class="srv-breadcrumbs__sep" aria-hidden="true">/</li>

          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
            <span itemprop="name"><?php echo esc_html( get_the_title() ); ?></span>
            <meta itemprop="position" content="2" />
          </li>

        </ol>
      </nav>
          <h1 class="about-hero__title">
            SEO Técnico
          </h1>
           <h2 class="about-hero__subtitle">
            Especializada en migraciones y escalabilidad web.
          </h2>

          <p class="about-hero__subtitle">
            Desde hace 9 años ayudo a proyectos de Chile y LATAM a resolver problemas complejos
            de visibilidad, performance y migraciones, construyendo bases técnicas sólidas para escalar sin riesgos.
          </p>

          <p class="about-hero__subtitle">
            Trabajo con distintos CMS y arquitecturas web, con amplia experiencia en WordPress y proyectos a medida,
            siempre con foco en SEO Técnico y performance.
          </p>

          <div class="about-hero__actions">
            <a href="<?php echo esc_url( home_url('/contacto/') ); ?>" class="btn btn-primary">
              Agenda una llamada
            </a>
            <a href="<?php echo esc_url( home_url('/servicios/') ); ?>" class="btn btn-ghost">
              Ver servicios
            </a>
          </div>
        </div>

        <div class="about-hero__media">
          <div class="card card--glass about-profile">
            <figure class="about-profile__figure">
              <img
                class="about-profile__img"
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/sobre-mi/avatar-illustration.png"
                width="520"
                height="520"
                loading="lazy"
                decoding="async"
                alt="Ilustración de perfil de Jessica Contreras"
              >
            </figure>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- QUIÉN SOY -->
  <section class="about-section about-section--who">
  <div class="container">

    <div class="about-who">

      <div class="about-who__content">
        <div class="section-head">
          <!-- Trayectoria en SEO Técnico / Mi recorrido profesional -->
          <h2>Mi camino SEO</h2>
        </div>

        <div class="about-content">
          <p>
            Tengo 9 años de experiencia como SEO Manager, especializada en SEO Técnico y en proyectos donde la base técnica
            es clave para crecer sin perder visibilidad.
          </p>
          <p>
            Durante más de 8 años trabajé en iProspect Chile como SEO Manager Líder, liderando estrategias SEO para proyectos
            de Chile y LATAM.
          </p>
          <p>
            Desde 2025 trabajo de forma independiente, acompañando a equipos y marcas que necesitan resolver desafíos técnicos
            complejos y tomar decisiones basadas en datos.
          </p>
        </div>
      </div>

      <aside class="about-who__side" aria-label="Resumen de experiencia">
        <div class="card card--glass about-who-card">
          <h3 class="about-who-card__title">Resumen</h3>

          <ul class="about-who-card__list">
            <li><strong>9 años</strong> en SEO Técnico</li>
            <li><strong>Proyectos</strong> Chile &amp; LATAM</li>
            <li><strong>Master en</strong> SEO Técnico</li>
            <li><strong>WordPress</strong> &amp; arquitecturas custom</li>
          </ul>
        </div>
      </aside>

    </div>

  </div>
</section>


 <!-- ESPECIALIZACIÓN -->
<section class="about-section about-section--what">
  <div class="container">

    <div class="about-what__grid">

      <!-- COLUMNA IZQUIERDA -->
      <div class="about-what__content">
        <div class="section-head">
          <!-- Dónde aporto mayor valor / Dónde hago la diferencia / Dónde entra mi expertise / Dónde hago la diferencia -->
          <h2>Mi foco profesional</h2>
        </div>

        <div class="about-content">
          <p>
            Me especializo en SEO Técnico y en proyectos donde los errores de base impactan directamente en la visibilidad
            y el crecimiento.
          </p>

          <div class="about-spec">
            <span class="about-spec__item">SEO Internacional</span>
            <span class="about-spec__item">Migraciones SEO</span>
            <span class="about-spec__item">Auditorías Técnicas</span>
            <span class="about-spec__item">SEO Local</span>
          </div>

          <p>
            Mi foco está en detectar problemas reales, priorizarlos por impacto y asegurar que la implementación técnica se haga correctamente.
          </p>
        </div>
      </div>

      <!-- COLUMNA DERECHA (APOYO VISUAL) -->
      <aside class="about-what__aside" aria-label="Resumen de especialización">
        <div class="about-card">
          <p class="about-card__eyebrow">Resumen técnico</p>
          <h3 class="about-card__title">Dónde aporto más valor</h3>

          <ul class="about-card__list">
            <li>Detección de fricciones SEO (indexación, rastreo, CWV, arquitectura)</li>
            <li>Priorización por impacto (quick wins vs. cambios estructurales)</li>
            <li>Migraciones sin pérdida (redirecciones, canonicals, hreflang, logs)</li>
            <li>Implementación con devs (tickets claros + QA técnico)</li>
          </ul>

          <div class="about-card__meta">
            <span class="about-pill">SEO Técnico</span>
            <span class="about-pill">Performance</span>
            <span class="about-pill">Migraciones</span>
          </div>
        </div>
      </aside>

    </div>

  </div>
</section>

  <!-- CÓMO TRABAJO -->
<section class="about-section about-section--how">
  <div class="container">
    <div class="about-how">

      <div class="about-how__content">
        <div class="section-head">
            <!-- Cómo abordo los proyectos / Mi forma de trabajo / Mi enfoque de trabajo / Mi proceso de trabajo -->
          <h2>Cómo abordo los proyectos</h2>
        </div>

        <div class="about-content">
          <p class="about-how__lead">
            Trabajo con una metodología clara, técnica y orientada a impacto real.
          </p>

          <p>
            Comienzo con un diagnóstico técnico profundo, priorizo acciones según impacto SEO real y acompaño la implementación
            para asegurar que lo definido se ejecute correctamente.
          </p>

          <p>
            Todo el trabajo se mide y se ajusta en base a datos, no a supuestos.
          </p>

          <p class="about-how__tagline">
            Menos supuestos. Más datos. Mejor ejecución.
          </p>
        </div>
      </div>

      <div class="about-how__visual" aria-label="Flujo de trabajo">
        <div class="card card--glass about-flow__card">
          <div class="about-flow__inner">

            <div class="about-flow__step">
              <span class="about-flow__num">01</span>
              <div class="about-flow__text">
                <strong>Diagnóstico técnico</strong>
                <span>Crawl, indexación, CWV, logs, arquitectura y señales.</span>
              </div>
            </div>

            <div class="about-flow__step">
              <span class="about-flow__num">02</span>
              <div class="about-flow__text">
                <strong>Priorización por impacto</strong>
                <span>Quick wins + roadmap según riesgo/beneficio.</span>
              </div>
            </div>

            <div class="about-flow__step">
              <span class="about-flow__num">03</span>
              <div class="about-flow__text">
                <strong>Implementación acompañada</strong>
                <span>Revisión técnica, QA y validación post-release.</span>
              </div>
            </div>

            <div class="about-flow__step">
              <span class="about-flow__num">04</span>
              <div class="about-flow__text">
                <strong>Medición & ajuste</strong>
                <span>Dashboards, tracking y iteración basada en datos.</span>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>



  <!-- REPORTING & DATOS -->
  <!-- REPORTING & DATOS -->
<section class="about-section about-section--data">
  <div class="container">
    <div class="about-split about-split--data">

      <!-- Columna izquierda -->
      <div class="about-left">
        <div class="section-head">
          <h2>Reporting & datos</h2>
        </div>

        <div class="about-content">
          <p class="about-kicker"><strong>Optimizaciones técnicas basadas en datos y KPI’s medibles.</strong></p>

          <p>
            Desarrollo reportes en Looker Studio integrando fuentes como Google Analytics 4, Google Search Console,
            Semrush y Screaming Frog, para analizar el rendimiento SEO desde una perspectiva técnica y estratégica.
          </p>

          <p>
            Los dashboards están pensados para facilitar el análisis, detectar oportunidades reales y apoyar la toma de decisiones.
          </p>
        </div>
      </div>

      <!-- Columna derecha -->
      <aside class="about-right" aria-label="Stack de reporting">
        <div class="card card--glass about-data-card">
          <div class="about-data-card__top">
            <h3 class="about-data-card__title">Dashboards accionables</h3>
            <p class="about-data-card__subtitle">Para decidir rápido, con claridad.</p>
          </div>

          <div class="about-data-chips" aria-label="Fuentes y herramientas">
            <span class="chip">GA4</span>
            <span class="chip">GSC</span>
            <span class="chip">Looker Studio</span>
            <span class="chip">Semrush</span>
            <span class="chip">Screaming Frog</span>
          </div>

          <div class="about-data-metrics" aria-label="Qué mido">
            <div class="about-metric">
              <span class="about-metric__label">Visibilidad</span>
              <span class="about-metric__value">Clicks / Impressions</span>
            </div>
            <div class="about-metric">
              <span class="about-metric__label">Eficiencia</span>
              <span class="about-metric__value">CTR / Query intent</span>
            </div>
            <div class="about-metric">
              <span class="about-metric__label">Salud técnica</span>
              <span class="about-metric__value">CWV / Indexación</span>
            </div>
          </div>

          <div class="about-data-note">
            <span class="about-data-dot" aria-hidden="true"></span>
            <p>Todo se conecta con objetivos, hipótesis y próximos pasos.</p>
          </div>
        </div>
      </aside>

    </div>
  </div>
</section>


  <!-- CTA FINAL -->
  <?php get_template_part('plantillas/cta-final'); ?>

</main>

<?php get_footer(); ?>
