<?php

/**
 * Aplicación Nº 7 (Mostrar impares)
 * Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
 * Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
 * salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
 * utilizando las estructuras while y foreach.
*/


//variables
$miArray = array();
$arrayDeImpares = array();

//carga de arrays
$miArray = CrearArrayNumerico();
$arrayDeImpares = CargarArrayDeImpares($miArray);

//Muestro por pantalla
echo "los valores impares son: " . "<br>";
mostrarConEstructuraFor($arrayDeImpares);
mostrarConEstructuraForeach($arrayDeImpares);
mostrarConEstructuraWhile($arrayDeImpares);


//Funciones
function CrearArrayNumerico(){

    $arr = array();

    for ($i=0; $i < 20; $i++) { 

        array_push($arr,$i+1);
    }
    //var_dump($arr);
    return $arr;
}

function CargarArrayDeImpares($arrayEnteros){

    $arr = array();

    foreach ($arrayEnteros as $value) {
        
        if(($value % 2) != 0){
            array_push($arr, $value);
        }
    }
    //var_dump($arr);
    return $arr;
}

function mostrarConEstructuraFor($arrayNumerico){
    echo "Mostrando utilizando estructura For " . "<br>";
    for ($i=0; $i < 10; $i++) { 
        echo $arrayNumerico[$i] . "<br>";
    }


}

function mostrarConEstructuraForeach($arrayNumerico){
    echo "Mostrando utilizando estructura Foreach " . "<br>";
    foreach ($arrayNumerico as  $value) {
        echo $value . "<br>";
    }
}

function mostrarConEstructuraWhile($arrayNumerico){
    echo "Mostrando utilizando estructura While " . "<br>";

    $a=0;
    while ($a <= 9) {
        echo $arrayNumerico[$a] . "<br>";
        $a++;
    }

}

?>