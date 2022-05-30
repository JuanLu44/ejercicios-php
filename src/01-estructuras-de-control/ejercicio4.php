<?php

$dado = rand(1, 6);

if ($dado == 1) {
    print("<img src ='../imagenes/dado/dado1.svg'>");
}elseif ($dado == 2) {
    print("<img src ='../imagenes/dado/dado2.svg'>");
}elseif ($dado == 3) {
    print("<img src ='../imagenes/dado/dado3.svg'>");
}elseif ($dado == 4) {
    print("<img src ='../imagenes/dado/dado4.svg'>");
}elseif ($dado == 5) {
    print("<img src ='../imagenes/dado/dado5.svg'>");
}else print("<img src ='../imagenes/dado/dado6.svg'>");

?>