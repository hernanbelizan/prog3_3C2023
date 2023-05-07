<?php


// Aplicación Nº 1 (Sumar números)
// Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
// supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
// se sumaron.


$num = 0;
$suma = 0;
do {
    echo "<br>";
    
    $suma += $num;
    echo "$num + $suma";
    echo "<br>";

    $num += 1;


} while (($num + $suma) <= 1000);

//Num debe dar 44
echo "La cantidad de numeros sumados es: $num";

echo "<br/>" . "La suma total es: ". $suma;

?>