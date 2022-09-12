const btn = document.getElementById('top-btn');

btn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: 'smooth',
  });
});