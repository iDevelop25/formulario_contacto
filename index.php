<?php

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    //Validando campo nombre
    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresa un nombre <br/>';
    }

    //Validando campo email
    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'por favor ingresa un correo valido <br/>';
        }
    } else {
        $errores .= 'Por favor ingresa un correo <br/>';
    }

    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    } else {
        $errores .= 'Por favor ingresa el mensaje <br/>';
    }

    if (!$errores) {
        $enviar_a = 'tumail@tuempresa.com';
        $asunto = 'Correo enviado desde tuPagina.com';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "mensaje: " . $mensaje;

        //mail($enviar_a, $asunto, $mensaje_preparado);

        $enviado = 'True';
    }
}
require 'index.view.php';
