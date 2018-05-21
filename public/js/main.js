(function() {
  'use strict';
  window.addEventListener('load', function() {
    // obtenemos todos los formularios de la aplicación a la cual se aplicaran los estilos de validación de bootstrap
    var forms = document.getElementsByClassName('needs-validation');
    // Bucle sobre los inputs y evitar el envio del formulario
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();