<?php

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $email_pagina = 'juanjoseds28@gmail.com';

    $email_asunto = 'Consulta de la Página Web de Pintado José Diaz';

    $email_cuerpo = "Nombre del Usuario: $nombre.\n".
                    "Correo del Usuario: $correo.\n".
                    "Asunto del Usuario: $asunto.\n".
                    "Mensaje del Usuario: $mensaje .\n";

    $mi_email = '20195081si@sise.com.pe';

    $headers = "De: $email_pagina \r\n";

    $headers .= "Reply-To: $correo \r\n";

    mail($mi_email, $email_asunto, $email_cuerpo, $headers);

    header("Location: contacto.html");

?>