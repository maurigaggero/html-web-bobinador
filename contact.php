<?php
        //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
 $destino = "tonigaggero@hotmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $telefono = $_POST["telefono"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nTeléfono: " . $telefono  . "\nAsunto: " . $mensaje ;
    mail($destino, "Contacto", $contenido);
    header("Location: index.html");
//Esto es opcional, aqui pueden colocar un mensaje de "enviado correctamente" o redireccionarlo a algun lugar
?>