<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        $d = isset ($_GET["ds"]) ?$_GET["ds"]:0;
        switch ($d){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar ! :)";
                break;
            case 7:
            case 8:
                 echo" Desvanse pequeno ;)";
                 break;
            default:
                echo "Dia da semana invalido";

        }
    ?>
    <br/><a href= "index.html" class="botao">Voltar</a>
</div>
</body>
</html>