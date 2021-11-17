const boton = document.getElementById('btn-aceptar-cookies');
const avisoCookies = document.getElementById('cookies');

function aceptar() {
  boton.addEventListener('click', function() {
    avisoCookies.classList.remove('activo');
  });
}
