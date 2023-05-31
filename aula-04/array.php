<?php 
//criando um array como numeros
echo "valores do array: <br>";
$numeros = array(1 , 2 , 3 , 4 ,5);
print_r ("1 , 2 ,3 ,4, 5");

//iserindo um array
$numeros[5]= "6";
echo "<br><br> valores do array depois da inserção: <br>";
print_r($numeros);

#outro jeito de inserir
// echo "valores do array antes da inserção: " ;
// foreach($numeros as $numero){
//     echo $numero . " ";
// }
// $numeros[] = 6;
// echo "<br> <br> valores do array depois da inserção: ";
// foreach($numeros as $numero){
//     echo $numero . " ";
// }

//Removendo um array
unset ($numeros[2]); 
echo "<br> <br> removendo um valor do array depois da inserção, valor removido N3: <br> ";
print_r($numeros);

#outro jeito de remover
// echo "<br> <br> removendo um valor do array depois da inserção, valor removido N3: ";
// foreach($numeros as $numero){
//     echo $numero . " ";}

//auterando valores
$numeros[3] = "8";
echo "<br><br> alterando valor da array N4 para N8: <br>";
print_r($numeros);

//ordenando

sort($numeros);
echo "<br><br> ordenando os valores <br>";
print_r($numeros);

?>