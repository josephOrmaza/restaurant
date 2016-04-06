<?php

$cliente = new ClienteData();
$cliente->nombres = $_POST["nombres"];
$cliente->apellidos = $_POST["apellidos"];
$cliente->codigo = $_POST["codigo"];
$cliente->sexo = $_POST["sexo"];
$cliente->direccion = $_POST["direccion"];
$cliente->fecha_nac = $_POST["fecha_nac"];
$cliente->cedula = $_POST["cedula"];
$cliente->tipo_cliente = $_POST["tipo_cliente"];
$cliente->email = $_POST["email"];
$cliente->celular = $_POST["celular"];

 { $cliente->add_cliente(); }
 header("Location: index.php?view=clientes");

?>