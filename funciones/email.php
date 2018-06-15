<?php
$destino="bevisagaleria@gmail.com";

$mensaje= $_POST['email'];
$mensaje .= $_POST['mensaje'];
$titulo = $_POST['asunto'];
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
