<?php

// Definimos una constante
define("NUM_ELEMENTS", 10);

// Definimos un array

$numeros = array();

// Inicializamos un array con valores aleatorios
for ($i = 0 ; $i <= NUM_ELEMENTS ; $i++) { 
    $numeros[$i] = rand(1, 30);
}

// Imprimimos el array con un bucle foreach
echo "<h1> Array con Bucle FOREACH </h1>";
echo "<ul>";   
foreach ($numeros as $valor) {
    echo "<li class=\"$clase\"> $valor </li>";
}   
echo "</ul>";


// Calculamos el valor máximo del array
$minimo = $numeros[0];
$pos_minimo = 0;

for ($i=0; $i < NUM_ELEMENTS; $i++) { 
    if ($numeros[$i] < $minimo) {
        $minimo = $numeros[$i];
        $pos_minimo = $i;
    }
}

echo "El valor mínimo es: $minimo. <br>";
echo "La posición del valor mínimo es $pos_minimo. ";
?>