import 'flowbite';
import 'remixicon/fonts/remixicon.css';
import 'animate.css';
import './bootstrap';
import './navbar';
import './popup';
import './looping-sponsor'


import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
  duration: 800,
  once: true,
  startEvent: 'load', 
});

window.addEventListener('load', () => {
  AOS.refreshHard();
});


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
