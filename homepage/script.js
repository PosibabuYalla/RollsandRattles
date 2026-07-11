// Floor tabs (Explore Our 4 Floors)
const floorTabs = document.getElementById('floorTabs');
if (floorTabs) {
  const tabs = floorTabs.querySelectorAll('.floor-tab');
  const panels = document.querySelectorAll('.floor-panel');
  floorTabs.addEventListener('click', (e) => {
    const tab = e.target.closest('.floor-tab');
    if (!tab) return;
    const floor = tab.dataset.floor;
    tabs.forEach((t) => t.classList.toggle('active', t === tab));
    panels.forEach((p) => p.classList.toggle('active', p.dataset.floor === floor));
  });
}

// Scroll-reveal animation with a light stagger per group
const revealEls = document.querySelectorAll('.reveal');
if ('IntersectionObserver' in window && revealEls.length) {
  const groups = new Map();
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      const parent = el.parentElement;
      const siblingIndex = groups.get(parent) || 0;
      el.style.transitionDelay = `${Math.min(siblingIndex, 6) * 70}ms`;
      groups.set(parent, siblingIndex + 1);
      el.classList.add('in-view');
      observer.unobserve(el);
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

  revealEls.forEach((el) => observer.observe(el));
} else {
  revealEls.forEach((el) => el.classList.add('in-view'));
}
