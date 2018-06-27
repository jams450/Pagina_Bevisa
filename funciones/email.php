<?php
$destino="bevisagaleria@gmail.com";
$mensaje="Nombre: " . $_POST['nombre'] ."\n";
$mensaje.="Correo: " . $_POST['email'] ." \n";
$mensaje.="Mensaje : " . $_POST['mensaje'];
$titulo ="Mensaje enviado desde la pagina Web : " . $_POST['asunto'];
$bool = mail($destino,$titulo,$mensaje);
if ($bool) {
  $respuesta="Correcto";
  die(json_encode($respuesta));
}
else {
  $respuesta="Mal";
  die(json_encode($respuesta));
}

?>
