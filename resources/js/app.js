import './bootstrap';
import './navbar'
import 'flowbite';
import 'remixicon/fonts/remixicon.css';
import AOS from 'aos';
import 'aos/dist/aos.css';



import Alpine from 'alpinejs';


window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    AOS.init();
});

