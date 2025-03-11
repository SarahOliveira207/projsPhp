<?php 

    /*$num = 12;
    $string = "Letras";
    var_dump($num, $string);
    if(isset($num)){
        echo $num;
    }
    else
        echo "Bueno";*/

    $name = "Sarah dos Santos";

    if(str_word_count($name) > 3){
        echo "<b>É UM NOME GRANDE</b>";
    }
    else 
        echo "<mark>é um nome pequeno</mark>";
    echo strpos("Hello world!", "world");

    echo str_replace("Santos", "Lima", $name);
?>