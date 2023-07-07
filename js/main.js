const sideMenu = document.querySelector('aside');
const menuBtn = document.getElementById('menu-btn');
const closeBtn = document.getElementById('close-btn');

const darkMode = document.querySelector('.dark-mode');
const body = document.body;

// Obtener el estado del modo oscuro del localStorage
const isDarkMode = localStorage.getItem('darkMode') === 'true';


// Establecer el tema inicial
if (isDarkMode) {
  body.classList.add('dark-mode-variables');
  console.log(darkMode.querySelector('span:nth-child(1)'));
  darkMode.querySelector('span:nth-child(1)').classList.remove('active');
  darkMode.querySelector('span:nth-child(2)').classList.add('active');
  
} else {
  darkMode.querySelector('span:nth-child(1)').classList.add('active');
  darkMode.querySelector('span:nth-child(2)').classList.remove('active');
}

menuBtn.addEventListener('click', () => {
  sideMenu.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
  sideMenu.style.display = 'none';
});

darkMode.addEventListener('click', () => {
  // Alternar el tema oscuro
  body.classList.toggle('dark-mode-variables');
  darkMode.querySelector('span:nth-child(1)').classList.toggle('active');
  darkMode.querySelector('span:nth-child(2)').classList.toggle('active');

  // Guardar el estado del modo oscuro en el localStorage
  const isDarkMode = body.classList.contains('dark-mode-variables');
  localStorage.setItem('darkMode', isDarkMode.toString());
});
