const botonAceptarCookies = document.getElementById('btn-aceptar-cookies');
const avisoCookies = document.getElementById('cookies');

botonAceptarCookies.addEventListener('click', () =>{
  avisoCookies.classList.remove('activo');
});