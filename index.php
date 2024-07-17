<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Formulario</title>
</head>
<body>
    <form action="form.php" method="post" class="formulario">
        <div class="caja">
            <div class="form__div_label">
                <label class="form__label" for="nombre">Nombre:</label>
                <input class="form__input" type="text" id="nombre" name="nombre" required>
                <div id="error-nombre" class="error"></div>
            </div>
            <div class="form__div_label">
                <label class="form__label" for="edad">Edad:</label>
                <input class="form__input" type="number" id="edad" name="edad" required>
            </div>
            <div class="form__div_label">
                <label class="form__label" for="email">Email:</label>
                <input class="form__input" type="email" id="email" name="email" required>
            </div>
        </div>
        <input class="form__boton" type="submit" value="Enviar">
    </form>
    <script>
        function validarFormulario(event) {
            const nombre = document.getElementById('nombre').value;
            const errorNombre = document.getElementById('error-nombre');
            const regex = /^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+$/;

            if (!regex.test(nombre)) {
                errorNombre.style.display = 'block';
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
    </script>
</body>
</html>
