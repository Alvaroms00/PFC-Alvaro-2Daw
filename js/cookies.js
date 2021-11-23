let boton = document.getElementById('btn-aceptar-cookies');
let avisoCookies = document.getElementById('cookies');


boton.addEventListener('click', function () {
  avisoCookies.classList.remove('activo');
});