<?php
// llamar a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];
$ubicacion = $_POST['ubicacion'];
$edad = $_POST['edad'];
$cobertura = $_POST['cobertura'];


// DATOS PARA EL CORREO
$destinatario = "globalcestber@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Ubicacion: $ubicacion \n";
$carta .= "Edad: $edad \n";
$carta .= "Cobertura: $cobertura";

// ENVIANDO MENSAJE
mail($destinatario, $asunto, $carta);


?>