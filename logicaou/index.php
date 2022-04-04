<?php
   $a = TRUE;
   $b = FALSE;

   if ($a or $b)
   {
       echo "verdadeiro";
   }
   else
   {
       echo "falso";
   }

   //no caso do "or", como diz na tabela verdade, só vai dá falso se as duas variáveis forem falsas
?>