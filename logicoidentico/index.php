<?php
   $a = 10;
   $b = "10";

   if ($a===$b)
   {
       echo "$a e $b são iguais e do mesmo tipo";
   }
   if ($a!==$b)
   {
       echo "$a e $b são de tipos diferentes";
   }

   //para esta afirmação ser verdadeira era para a variável $a ser real e $b também, mas $b é uma string, ou seja, não são idênticos.
?>