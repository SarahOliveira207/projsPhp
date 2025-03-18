<?php
    /*exerc1.php
 Declare a variável php1 com "1";
 Com += some 3 a essa variável;
 Guarde na variável php1 o resultado da divisão de
php1 por 3, use /=;
 Crie a variável php2 c/um typecast de php1 para
inteiro;
 Imprime php2 com echo;*/

    $php1 = 1;
    $php1 += 3;
    $php1 /=3;
    $php2 = (int)$php1;
    echo $php2;
?>