(() => {
  const header = document.querySelector('.site-header');
  if (!header) return;
  const toggle = () => header.classList.toggle('is-scrolled', window.scrollY > 8);
  toggle();
  window.addEventListener('scroll', toggle, { passive: true });
})();
