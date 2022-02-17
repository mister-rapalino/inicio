<?php

 $destinatario = `mister.rapalino@gmail.com`;

 $correo = $_POST[`correo`];

 $mensaje = $_POST[`mensaje`];

 $asunto = $_POST[`asunto`];


 $header = "Enviado desde mrapalino.com ";

 $mensajeCompleto = $mensaje . "\nAtentamente: " . $correo;

 mail($destinatario, $asunto, $mensajeCompleto, $header);

 echo "<script> alert("correo enviado exitosamente") </script> ";

 echo "<script> setTimeout(\"location.href=`index.html`\",1000)</script>";






?>
