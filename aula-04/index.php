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
    //arry como string
    // Array é uma lista onde pode adicionar e procurar itens adicionados

    //Criando um array com o nome de futas e os valores maçã banana laaranja e morango
    echo "Criando um array com o nome de futas e os valores (maçã, banana, laranja, e morango.) <br> esse é o começo no meu array <br>";
    $frutas = array("maçã", "banana", "laranja", "morango");

    print_r($frutas);

    //Inserindo um novo valor [abcaxi] dentro do array frutas:
 echo "<br><br>Inserindo um novo valor [abcaxi] dentro do array frutas: <br> " ;
    $frutas[4] = "abacaxi";
    print_r($frutas);

    // É possivel utilizar outra forma:
    //  array_push($frutas, "Abacaxi");

    //Alterando o valor abacaxi[4] por uva:
    $frutas[4] = "uva";
    echo "<br> <br> Alterando o valor abacaxi[4] por uva: <br>";
    print_r($frutas);

    //removendo array valor maça 

    unset ($frutas[0]);
    echo "<br> <br> removendo array valor maça <br>";
    print_r($frutas);

    

    // ordenação do array
    echo "<br> <br> ordenação do array <br>";
    sort($frutas);

    print_r($frutas);

    // utilizando o laço de repetição para exibir todos os items da array $frutas
echo "<br><br> utilizando o laço de repetição para exibir todos os items da array frutas <br><br>";
    foreach($frutas as $fruta){
        echo $fruta . "<br>";
    }
    ?>
</body>
</html>