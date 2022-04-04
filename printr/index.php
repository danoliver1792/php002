<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste com a função printr</title>
</head>
<body>
    <pre>
        <?php
            $v = array("A","B","C");
            print_r($v);

            //a função print_r  imprime o conteúdo de uma variável de fomra explanatica, asim com o a var_dump, mas eu formato mais legível com os conteúdos alinhados e suprimindo os tipos de dados.

            //a tag <pre></pre> serve para deixar o vetor de cima para baixo.
        ?>
    </pre>
</body>
</html>