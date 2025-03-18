<?php 
    /*
    Declare php3 com um valor inteiro entre 1 e 10;
     Crie a variável php4 que receberá o resultado de
    uma operação ternária php2 <= php3, que
    retornará para php4 o valor: "menor igual" caso seja
    verdadeira, e: "maior", se for falsa
    */

    $php3 = 7;
    $php1 = 1;
    $php4 = ($php1 <= $php3)? ("É menor"): ("É maior");
    echo $php4;
?>