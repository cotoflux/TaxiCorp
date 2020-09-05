<?php

require_once "../model/enlacebd.php";

$conexion = new Conectar();
$miconexion = $conexion->conectar();
echo "<br>";
print_r($conexion->desconectar($miconexion));