function validarFormulario(event) {
    const nombre = document.getElementById('nombre').value;
    const errorNombre = document.getElementById('error-nombre');
    const regex = /^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+$/;

    if (!regex.test(nombre)) {
        errorNombre.style=`display:block`;
        errorNombre.textContent = 'Por favor ingresa un nombre válido. No se permiten números ni caracteres especiales';
        event.preventDefault();
    } else {
        errorNombre.textContent = '';
    }
}

window.onload = function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', validarFormulario);
}