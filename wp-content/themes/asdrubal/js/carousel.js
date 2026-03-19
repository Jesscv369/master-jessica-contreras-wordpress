document.addEventListener("DOMContentLoaded", () => {
  const viewport = document.querySelector(".carousel-viewport");
  const prevBtn = document.querySelector(".carousel-btn.prev");
  const nextBtn = document.querySelector(".carousel-btn.next");

  if (!viewport || !prevBtn || !nextBtn) return;

  // Flechas: mover por “una pantalla” (estable en mobile)
  const scrollAmount = () => viewport.clientWidth * 0.9;

  nextBtn.addEventListener("click", () => {
    viewport.scrollBy({ left: scrollAmount(), behavior: "smooth" });
  });

  prevBtn.addEventListener("click", () => {
    viewport.scrollBy({ left: -scrollAmount(), behavior: "smooth" });
  });

  // Drag / Swipe (usa scroll real)
  let isDown = false;
  let startX = 0;
  let startScrollLeft = 0;

  const pointerDown = (e) => {
    isDown = true;
    viewport.style.cursor = "grabbing";
    startX = (e.touches ? e.touches[0].clientX : e.clientX);
    startScrollLeft = viewport.scrollLeft;
  };

  const pointerMove = (e) => {
    if (!isDown) return;
    const x = (e.touches ? e.touches[0].clientX : e.clientX);
    const diff = x - startX;
    viewport.scrollLeft = startScrollLeft - diff;
  };

  const pointerUp = () => {
    if (!isDown) return;
    isDown = false;
    viewport.style.cursor = "grab";
  };

  viewport.style.cursor = "grab";

  // Mouse
  viewport.addEventListener("mousedown", pointerDown);
  viewport.addEventListener("mousemove", pointerMove);
  window.addEventListener("mouseup", pointerUp);

  // Touch
  viewport.addEventListener("touchstart", pointerDown, { passive: true });
  viewport.addEventListener("touchmove", pointerMove, { passive: true });
  viewport.addEventListener("touchend", pointerUp);

  // (Opcional) si usas "scroll-snap" en CSS, esto ayuda a que el snap se sienta mejor con flechas
  // window.addEventListener("resize", () => {});
});
