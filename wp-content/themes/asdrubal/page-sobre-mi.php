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
      <div class="section-head">
        <h2>Mi Experiencia</h2>
      </div>

      <div class="about-content">
        <p>
          Soy SEO Manager con 9 años de experiencia, especializada en SEO Técnico y en proyectos donde la base técnica
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
  </section>

  <!-- ESPECIALIZACIÓN -->
  <section class="about-section about-section--what">
    <div class="container">
      <div class="section-head">
        <h2>En qué me especializo</h2>
      </div>

      <div class="about-content">
        <p>
          Me especializo en SEO Técnico y en proyectos donde los errores de base impactan directamente en la visibilidad
          y el crecimiento.
        </p>

        <ul class="about-list">
          <li>SEO Internacional</li>
          <li>Migraciones SEO</li>
          <li>Auditorías Técnicas</li>
          <li>SEO Local</li>
        </ul>

        <p>
          Mi foco está en detectar problemas reales, priorizarlos por impacto y asegurar que la implementación técnica se haga correctamente.
        </p>
      </div>
    </div>
  </section>

  <!-- CÓMO TRABAJO -->
  <section class="about-section about-section--how">
    <div class="container">
      <div class="section-head">
        <h2>Cómo trabajo</h2>
      </div>

      <div class="about-how">
        <div class="about-content">
          <p>
            Trabajo con una metodología clara y estructurada, enfocada en entender el problema antes de proponer soluciones.
          </p>
          <p>
            Comienzo con un diagnóstico técnico profundo, priorizo acciones según impacto SEO real y acompaño la implementación
            para asegurar que lo definido se ejecute correctamente.
          </p>
          <p>
            Todo el trabajo se mide y se ajusta en base a datos, no a supuestos.
          </p>
        </div>

        <div class="about-flow" aria-label="Flujo de trabajo">
          <div class="card card--glass about-flow__card">
            <div class="about-flow__steps">
              <span class="chip">Diagnóstico</span>
              <span class="chip">Priorización</span>
              <span class="chip">Implementación</span>
              <span class="chip">Medición</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- REPORTING & DATOS -->
  <section class="about-section about-section--data">
    <div class="container">
      <div class="section-head">
        <h2>Reporting & datos</h2>
      </div>

      <div class="about-content">
        <p><strong>Optimizaciones técnicas basadas en datos y KPI’s medibles.</strong></p>
        <p>
          Desarrollo reportes en Looker Studio integrando fuentes como Google Analytics 4, Google Search Console,
          Semrush y Screaming Frog, para analizar el rendimiento SEO desde una perspectiva técnica y estratégica.
        </p>
        <p>
          Los dashboards están pensados para facilitar el análisis, detectar oportunidades reales y apoyar la toma de decisiones.
        </p>
      </div>
    </div>
  </section>

  <!-- CTA FINAL -->
  <?php get_template_part('plantillas/cta-final'); ?>

</main>

<?php get_footer(); ?>
