<?php

$nota = rand(-1,11);
print("Nota: $nota <br>");
if($nota >= 0 && $nota < 5) {
    print ("Insuficiente");
} elseif ($nota >= 5 && $nota < 6) {
    print ("Suficiente");
} elseif ($nota >= 6 && $nota < 7) {
    print ("Bien");
} elseif ($nota >= 7 && $nota < 9) {
    print ("Notable");
} elseif($nota >= 9 && $nota <= 10) {
    print ("Sobresaliente");
} else {
    print ("Nota incorrecta");
}

?>