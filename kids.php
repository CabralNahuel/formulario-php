<?php
session_start();
$nombre = $_SESSION['nombre'];
$edad = $_SESSION['edad'];
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Kids</title>
</head>
<body>
    <div class="card">
        <img class="card__imagen" src="./google.png" alt="google">
        
            <h2 class="card__titulo">Hola <?php echo htmlspecialchars($nombre); ?></h2>
            <p class="card__description">Bienvenido a la Pagina Kids de Google</p>
   
    </div>
</body>
</html>
