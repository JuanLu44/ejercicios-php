<?php

// Definimos una constante
define("NUM_ELEMENTS", 10);

// Definimos un array

$temperaturas = array();

// Inicializamos un array con valores aleatorios
for ($i = 0 ; $i <= NUM_ELEMENTS ; $i++) { 
    $temperaturas[$i] = rand(1, 30);
}

// Imprimimos el array con un bucle foreach
echo "<h1> Array con Bucle FOREACH </h1>";
echo "<ul>";   
foreach ($temperaturas as $valor) {
    echo "<li class=\"$clase\"> $valor </li>";
}   
echo "</ul>";

// Ordenamos el array de forma ascendente
sort($temperaturas);

// Imprimimos el array con un bucle foreach
echo "<h1> ARRAY odenado de menor a mayor </h1>";
echo "<ul>";
foreach ($temperaturas as $valor) {
    echo "<li> $valor </li>";
}
echo "</ul>";

// Ordenamos el array de forma descendente
rsort($temperaturas);

// Imprimimos el array con un bucle foreach
echo "<h1> ARRAY odenado de mayor a menor </h1>";
echo "<ul>";
foreach ($temperaturas as $valor) {
    echo "<li> $valor </li>";
}
echo "</ul>";
?>