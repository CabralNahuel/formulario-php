<?php
session_start();

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$email = $_POST["email"];


$nombre = ucwords(strtolower($nombre));

$_SESSION['nombre'] = $nombre;
$_SESSION['edad'] = $edad;
$_SESSION['email'] = $email;

if ($edad >= 18) {
    header("Location: mayor.php");
    exit(); 
} else {
    header("Location: kids.php");
    exit();
}
?>