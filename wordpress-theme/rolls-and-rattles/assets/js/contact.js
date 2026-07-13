// FAQ accordion
document.querySelectorAll('.faq-item').forEach((item) => {
  const question = item.querySelector('.faq-question');
  const answer = item.querySelector('.faq-answer');
  question.addEventListener('click', () => {
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach((openItem) => {
      if (openItem !== item) {
        openItem.classList.remove('open');
        openItem.querySelector('.faq-answer').style.maxHeight = null;
      }
    });
    item.classList.toggle('open', !isOpen);
    answer.style.maxHeight = !isOpen ? `${answer.scrollHeight}px` : null;
  });
});

// Contact form — client-side confirmation only.
// Wire this up to a real handler (Contact Form 7, WPForms, WP REST endpoint,
// admin-post.php action, etc.) so submissions actually reach the store.
const contactForm = document.getElementById('contactForm');
const formSuccess = document.getElementById('formSuccess');
if (contactForm) {
  contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    if (!contactForm.checkValidity()) {
      contactForm.reportValidity();
      return;
    }
    formSuccess.classList.add('show');
    contactForm.reset();
  });
}
