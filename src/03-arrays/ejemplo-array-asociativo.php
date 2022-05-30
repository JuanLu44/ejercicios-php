<?php

$edades = array("Juan" => "25", "María" => "28", "Paco" => "27");

echo "<pre>";
print_r($edades);
echo "</pre>";

foreach ($edades as $clave => $valor) {
    echo "Clave: " . $clave . " - Valor: " . $valor;
    echo "<br>";
}

?>