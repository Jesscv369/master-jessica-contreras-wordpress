<?php
/**
 * page-servicios.php
 * Theme: asdrubal
 */
get_header();
?>

<main id="primary" class="site-main page-servicios">

  <!-- HERO -->
  <section class="srv-hero">
    <div class="container">
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

      <h1 class="srv-title">Servicios</h1>
      <p class="srv-subtitle">Proyectos por entrega, con foco técnico y claridad en prioridades.</p>

      <div class="srv-hero-actions">
        <a href="<?php echo esc_url( home_url('/contacto/') ); ?>" class="btn btn-primary">
            Solicitar diagnóstico
        </a>
        <p class="srv-hero-note">
            Evaluación inicial para identificar prioridades técnicas y oportunidades SEO.
        </p>
</div>

    </div>
  </section>

  <!-- GRID SERVICIOS (HUB) -->
  <section id="servicios" class="srv-grid">
    <div class="container">
      <header class="srv-section-head">
        <h2>Qué puedo resolver</h2>
        <p>Intervenciones SEO técnicas enfocadas en impacto real sobre tráfico, indexación y performance.</p>
      </header>

      <div class="srv-cards">

        <article class="srv-card">
          <header class="srv-card-head">
            <h3 class="srv-card-title">
                <a href="/servicios/auditoria-seo-tecnica/" class="srv-card-title-link">
                    Auditoría SEO Técnica
                </a>
            </h3>
            <p class="srv-card-desc">Diagnóstico técnico priorizado: rastreo, indexación, arquitectura y performance.</p>
          </header>
          <ul class="srv-card-list">
            <li>Hallazgos priorizados por impacto/esfuerzo</li>
            <li>Recomendaciones implementables (con ejemplos)</li>
            <li>Checklist de validación post-fix</li>
          </ul>
          <div class="srv-card-actions">
            <a class="btn btn-ghost" href="<?php echo esc_url( home_url('/servicios/auditoria-seo-tecnica/') ); ?>">Ver detalle</a>
          </div>
        </article>

        <article class="srv-card">
          <header class="srv-card-head">
            <h3 class="srv-card-title">
                <a href="/servicios/migraciones-seo/" class="srv-card-title-link">
                  Migraciones SEO
                </a>
            </h3>
            <p class="srv-card-desc">Plan y QA para migrar sin perder tráfico: URLs, 301, indexación y control post go-live.</p>
          </header>
          <ul class="srv-card-list">
            <li>Mapa de redirecciones + reglas</li>
            <li>Checklist técnico por etapa</li>
            <li>Monitoreo post-lanzamiento</li>
          </ul>
          <div class="srv-card-actions">
            <a class="btn btn-ghost" href="<?php echo esc_url( home_url('/servicios/migraciones-seo/') ); ?>">Ver detalle</a>
          </div>
        </article>

        <article class="srv-card">
          <header class="srv-card-head">
            <h3 class="srv-card-title">
              <a href="/servicios/seo-internacional/" class="srv-card-title-link">
                SEO Internacional
              </a>
            </h3>
            <p class="srv-card-desc">Estructura por país/idioma + hreflang/canonicals para escalar sin canibalización.</p>
          </header>
          <ul class="srv-card-list">
            <li>Arquitectura por mercado</li>
            <li>Hreflang + canonicals sin conflictos</li>
            <li>QA de implementación</li>
          </ul>
          <div class="srv-card-actions">
            <a class="btn btn-ghost" href="<?php echo esc_url( home_url('/servicios/seo-internacional/') ); ?>">Ver detalle</a>
          </div>
        </article>

        <article class="srv-card">
          <header class="srv-card-head">
            <h3 class="srv-card-title">
              <a href="/servicios/seo-local/" class="srv-card-title-link">
                SEO Local
              </a>
            </h3>
            <p class="srv-card-desc">Señales locales y landings por zona (bien hechas) para captar demanda cercana.</p>
          </header>
          <ul class="srv-card-list">
            <li>Plantillas de landings locales</li>
            <li>Optimización técnica + on-page local</li>
            <li>Schema LocalBusiness (si aplica)</li>
          </ul>
          <div class="srv-card-actions">
            <a class="btn btn-ghost" href="<?php echo esc_url( home_url('/servicios/seo-local/') ); ?>">Ver detalle</a>
          </div>
        </article>

      </div>
    </div>
  </section>

<!-- BLOQUE CTA -->
<section class="srv-hub-note">
  <div class="container">
    <div class="srv-hub-note-inner">
      <div class="srv-hub-note-content">
        <h2>¿No sabes cuál necesitas?</h2>
        <p>Cuéntame tu caso en 2–3 líneas y te digo qué servicio calza mejor.</p>
      </div>

      <div class="srv-cta__action">
        <a class="btn btn-primary" href="#cotizar">Pedir recomendación</a>
      </div>
    </div>
  </div>
</section>


<!-- PROCESO -->
<section id="proceso" class="srv-process">
  <div class="container">
    <div class="srv-process-inner">
      <header class="srv-section-head">
        <h2>Cómo trabajo</h2>
        <p>Proceso: diagnóstico, prioridades y entrega clara.</p>
      </header>

      <div class="srv-steps">
        <div class="srv-step">
          <span class="srv-step-num">01</span>
          <h3>Kickoff + accesos</h3>
          <p>Objetivo, alcance y accesos (GSC/GA4/CMS si aplica).</p>
        </div>

        <div class="srv-step">
          <span class="srv-step-num">02</span>
          <h3>Diagnóstico</h3>
          <p>Revisión técnica según servicio y contexto del sitio.</p>
        </div>

        <div class="srv-step">
          <span class="srv-step-num">03</span>
          <h3>Plan priorizado</h3>
          <p>Roadmap accionable por impacto/esfuerzo.</p>
        </div>

        <div class="srv-step">
          <span class="srv-step-num">04</span>
          <h3>Entrega + QA</h3>
          <p>Entrega de documentación + checklist de validación.</p>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- FAQ -->
  <section id="faq" class="srv-faq">
    <div class="container">
      <header class="srv-section-head">
        <h2>Preguntas frecuentes</h2>
      </header>

      <div class="srv-faq-list">
        <details class="srv-faq-item">
          <summary>¿Trabajas solo por proyecto?</summary>
          <div class="srv-faq-content">
            <p>Sí. Trabajo por entrega, con alcance definido y entregables claros.</p>
          </div>
        </details>

        <details class="srv-faq-item">
          <summary>¿Incluye implementación?</summary>
          <div class="srv-faq-content">
            <p>Incluye guía + checklist de QA. La implementación la puede hacer tu equipo; puedo acompañar si lo necesitan.</p>
          </div>
        </details>

        <details class="srv-faq-item">
          <summary>¿Qué necesitas para partir?</summary>
          <div class="srv-faq-content">
            <p>Acceso a GSC (y GA4 si aplica). Para cambios técnicos: alguien que implemente en el sitio.</p>
          </div>
        </details>

        <details class="srv-faq-item">
          <summary>¿Cuánto demora?</summary>
          <div class="srv-faq-content">
            <p>Depende del tamaño del sitio y el alcance. Se define por hitos al iniciar.</p>
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
<section id="cotizar" class="srv-cta">
  <?php get_template_part('plantillas/cta-final'); ?>
</section>


</main>

<?php get_footer(); ?>
