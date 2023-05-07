<?php

// Aplicación Nº 12 (Invertir palabra)
// Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
// de las letras del Array.
// Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”


//Variables
$arrayCaracteres = array("H","O","L","A");

$arrayCaracteres = invertirCaracteres($arrayCaracteres);
//var_dump($arrayCaracteres);

MostrarArray($arrayCaracteres);

//Funciones
function invertirCaracteres($arrayCaracteres){

    $arr = array();
    $arr = array_reverse($arrayCaracteres);
    return $arr;
}

function MostrarArray($arrayAMostrar){

    foreach ($arrayAMostrar as  $value) {
        echo $value . "<br>";
    }

}


?>