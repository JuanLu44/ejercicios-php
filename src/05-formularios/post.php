<?php

/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

// REcuperamos los parámetros del formulario
$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];

//Comprobamos si los parámetros estan vacios o on
if(empty($nombre)){
    echo "El nombre está vacío <br/>";
    echo "<a href=\"ejercicio02.php\">Volver al formulario </a>";
    exit;
}
if(empty($apellido1)){
    echo "El apellido1 está vacío <br/>";
    echo "<a href=\"ejercicio02.php\">Volver al formulario </a>";
    exit;
}
echo "Nombre: $nombre";
echo "<br />";
echo "Apellido1: $apellido1";
echo "<br />";
echo "apellido2: $apellido2";
echo "<br />";
if(empty($apellido2)){
    echo "El apellido2 está vacío <br/>";
    echo "<a href=\"ejercicio02.php\">Volver al formulario </a>";
    exit;
}
?>
