<?php

/**
 * Aplicación Nº 6 (Carga aleatoria)
 * Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
 * función rand). Mediante una estructura condicional, determinar si el promedio de los números
 * son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
 * resultado.
 */


 $arrNUmeros = Array(
    1 => rand(1,10),
    2 => rand(1,10),
    3 => rand(1,10),
    4 => rand(1,10),
    5 => rand(1,10)
);

//var_dump($arrNUmeros);

$promedio = calcularPromedio($arrNUmeros);

echo "El promedio es -------> " . $promedio . "<br>";

if($promedio < 6) {
    echo "El promedio es Menor a 6" . "<br>";
}else if($promedio > 6) {
    echo "El promedio es Mayor a 6" . "<br>";
}else if($promedio == 6) {
    echo "El promedio es Igual a 6" . "<br>";
}

function calcularPromedio($arrayNumerico){
    $suma = 0;

    foreach ($arrayNumerico as $numero) {
        # code...
        $suma+= $numero;

    }
    
    $cantidadElementos = count($arrayNumerico);
    
    return ($suma / $cantidadElementos);
    
}


?>