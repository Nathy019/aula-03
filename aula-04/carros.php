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
    $carros = array("gol", "onix");
    print_r($carros);

    echo "<br><br> " . $carros[0]; #exibindo o item 0 

    $carros[0] = "palio"; #alterando intem 0 
    echo "<br><br>";
    print_r($carros);

    $carros[2] = "uno";
    echo "<br> <br>";
    print_r($carros);

    array_push($carros, "fiesta"); #adicionando o valor fiesta
    echo "<br> <br>";
    print_r($carros);

    unset($carros[1]);
    echo "<br> <br>";
    print_r($carros);

    sort($carros); #esta listando em forma cresente 
    echo "<br> <br>";
    print_r($carros);

    foreach($carros as $carro){# foreach laço de rerpetição( para cada valor ele recebe um valor)
      echo "<br> " . $carro . "<br> ";};

    ?>
</body>

</html>