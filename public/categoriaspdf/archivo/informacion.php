<?php

$informacion = array();

$mysqli = new mysqli("localhost","root", "", "tiendavirtual02");
$mysqli->set_charset('utf-8');
$statement = $mysqli->prepare("SELECT * FROM categorias");
$statement->execute();

$resultado = $statement->get_result();
while($row = $resultado->fetch_assoc()) $informacion[] = $row;
$mysqli->close();

?>