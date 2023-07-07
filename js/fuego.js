const button = document.getElementById('fireworks-btn');
const container = document.getElementById('fireworks-container');

button.addEventListener('click', () => {
  for (let i = 0; i < 10; i++) {
    const firework = document.createElement('div');
    firework.className = 'firework';
    firework.style.left = Math.random() * 100 + 'vw';
    firework.style.top = Math.random() * 100 + 'vh';
    container.appendChild(firework);

    setTimeout(() => {
      firework.parentNode.removeChild(firework);
    }, 2000);
  }
});