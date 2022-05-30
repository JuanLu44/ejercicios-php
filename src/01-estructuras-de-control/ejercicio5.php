<?php

$dado = rand (1, 6);

switch ($dado) {
    case '1':
        print("<img src ='../imagenes/dado/dado1.svg'>");
        break;
    case '2':
        print("<img src ='../imagenes/dado/dado2.svg'>");
        break;
    case '3':
        print("<img src ='../imagenes/dado/dado3.svg'>");
        break;
    case '4':
        print("<img src ='../imagenes/dado/dado4.svg'>");
        break;
    case '5':
        print("<img src ='../imagenes/dado/dado5.svg'>");
        break;
    case '6':
        print("<img src ='../imagenes/dado/dado6.svg'>");
        break;

}

?>