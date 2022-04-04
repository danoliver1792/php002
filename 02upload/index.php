<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["acao"])){
            $arq = $_FILES["file"];
            $arqn = explode(".",$arq["name"]);

            if($arqn[sizeof($arqn)-1] != "jpg")
               die("Você não pode fazer upload deste tipo de arquivo");
        }else {
            echo "Podemos continuar...";
        }

    ?>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>
 <!--o atributo enctype serve para definir o tipo de codificação com que os dados serão enviados