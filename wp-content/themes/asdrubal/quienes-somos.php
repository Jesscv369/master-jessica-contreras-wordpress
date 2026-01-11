<?php
/*
Template Name: Quienes Somos
*/
get_header();
?>

<main class="qs">

  <!-- HERO -->
  <section class="qs-hero">
    <div class="qs-container qs-hero__grid">

      <div class="qs-hero__copy">
        <p class="qs-eyebrow">Quiénes Somos</p>

        <h1 class="qs-title">Impulsando marcas con SEO estratégico y orgánico</h1>

        <p class="qs-subtitle">
          Estrategias que conectan visibilidad con ventas.
        </p>

        <div class="qs-cta">
          <a class="qs-btn" href="#como-trabajamos">Conoce cómo trabajamos</a>
          <a class="qs-link" href="#contacto">Contacto</a>
        </div>

        <div class="qs-badges">
          <div class="qs-badge">
            <img class="qs-badge__icon"
                 src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/icon-seo-tecnico.svg"
                 alt="SEO técnico y estratégico" width="44" height="44">
            <span>SEO Técnico y Estratégico</span>
          </div>

          <div class="qs-badge">
            <img class="qs-badge__icon"
                 src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/icon-crecimiento-sostenible.svg"
                 alt="Crecimiento sostenible" width="44" height="44">
            <span>Crecimiento sostenible</span>
          </div>

          <div class="qs-badge">
            <img class="qs-badge__icon"
                 src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/icon-resultados.svg"
                 alt="Medición orientada a resultados" width="44" height="44">
            <span>Medición orientada a resultados</span>
          </div>
        </div>
      </div>

      <div class="qs-hero__media">
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/quienes-somos/hero-illustration.webp"
          alt="Ilustración de trabajo SEO estratégico"
          width="900" height="700"
          loading="eager"
          fetchpriority="high"
        >
      </div>

    </div>
  </section>


  <!-- SOBRE -->
  <section class="qs-section" id="sobre">
    <div class="qs-container qs-about__grid">

      <div class="qs-about__avatar">
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/quienes-somos/avatar-illustration.png"
          alt="Jessica Contreras"
          width="320" height="320"
          loading="lazy"
        >
      </div>

      <div class="qs-about__content">
        <h2>Sobre Jessica Contreras</h2>
        <h3>Líder en Estrategias de SEO, Posicionamiento Orgánico y Growth Digital</h3>
        <p>
          Soy una profesional enfocada en desarrollar estrategias de posicionamiento orgánico,
          optimización técnica y mejoras On-Site/Off-Site orientadas a resultados. Mi objetivo es
          transformar el SEO en un canal real de adquisición: más visibilidad, mejor tráfico y
          conversiones medibles.
        </p>
      </div>

    </div>
  </section>


  <!-- MISIÓN -->
  <section class="qs-section qs-section--soft" id="mision">
    <div class="qs-container qs-mission__grid">

      <div class="qs-mission__content">
        <h2>Nuestra misión</h2>
        <p>
          Crear estrategias SEO que no solo atraigan tráfico, sino que generen resultados comerciales reales:
        </p>

        <ul class="qs-list">
          <li>Aumentar visibilidad orgánica</li>
          <li>Incrementar conversiones</li>
          <li>Mejorar métricas de negocio</li>
          <li>Fortalecer marca en buscadores</li>
        </ul>
      </div>

      <div class="qs-mission__media">
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/quienes-somos/mission-illustration.webp"
          alt="Ilustración de misión y resultados"
          width="700" height="520"
          loading="lazy"
        >
      </div>

    </div>
  </section>


  <!-- CÓMO TRABAJAMOS -->
  <section class="qs-section" id="como-trabajamos">
    <div class="qs-container">
      <h2>Cómo trabajamos</h2>
      <p class="qs-lead">
        Estrategia + datos + ejecución. Un proceso claro, medible y enfocado en crecimiento orgánico.
      </p>

      <div class="qs-steps">
        <div class="qs-step">
          <span class="qs-step__num">1</span>
          <h3>Diagnóstico</h3>
          <p>Auditoría técnica y de contenidos para detectar oportunidades y fricciones.</p>
        </div>

        <div class="qs-step">
          <span class="qs-step__num">2</span>
          <h3>Roadmap</h3>
          <p>Priorización por impacto/ esfuerzo con foco en objetivos del negocio.</p>
        </div>

        <div class="qs-step">
          <span class="qs-step__num">3</span>
          <h3>Implementación</h3>
          <p>Ejecución con buenas prácticas SEO y acompañamiento con tu equipo.</p>
        </div>

        <div class="qs-step">
          <span class="qs-step__num">4</span>
          <h3>Medición</h3>
          <p>Seguimiento de KPIs, mejoras continuas y reportes accionables.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- CONTACTO -->
  <section class="qs-section qs-section--soft" id="contacto">
    <div class="qs-container qs-contact__grid">
      <div>
        <h2>¿Trabajamos juntos?</h2>
        <p class="qs-lead">
          Cuéntame sobre tu proyecto y definimos una estrategia SEO alineada a tus objetivos.
        </p>
      </div>

      <div class="qs-contact__cta">
        <a class="qs-btn" href="/contacto/">Ir a contacto</a>
        <a class="qs-link" href="https://www.linkedin.com/in/jessica-contreras-seo/" target="_blank" rel="noopener">
          Ver LinkedIn
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
