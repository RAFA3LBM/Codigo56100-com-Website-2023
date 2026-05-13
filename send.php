<meta charset="utf-8"> 
<?php
    $destino= "direccion@jicadigital.com";
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nTelefono: " . $telefono . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
    mail($destino, "Contacto para Codigo56100", $contenido);
    header("location:gracias");
?>