import './bootstrap';

import Alpine from 'alpinejs';

import AOS from 'aos';
import 'aos/dist/aos.css';

import Swal from 'sweetalert2';


window.Alpine = Alpine;
window.Swal = Swal;

Alpine.start();
AOS.init();

