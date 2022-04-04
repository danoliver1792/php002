<?php
   if(isset($_POST["email"]) and !empty($_POST["email"])) {
   
   $nome = addslashes($_POST["name"]);
   $email = addslashes($_POST["email"]);
   $mensagem = addslashes($_POST["message"]);
   
   $to = "danrleioliveira1792@gmail.com";
   $subject = "contato - programador Dan";
   $body = $mensagem;
}
   echo "Mensagem enviada com sucesso!";
 ?>

 