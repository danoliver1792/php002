<?php
    $a = 5;
    $b = &$a; 
    
    echo "$a";
    
    //& indica que é uma referência de variável. Assim, qualquer alteração na variável reflete na outra.
?>