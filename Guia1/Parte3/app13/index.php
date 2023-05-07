<?php

// Aplicación Nº 13 (Invertir palabra)
// Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
// función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
// deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
// “Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán: 1 si la palabra
// pertenece a algún elemento del listado.
// 0 en caso contrario.


//Variables
//$palabra = "Recuperatorio";
// $palabra = "Parcial";
// $palabra = "Programación";
$palabra = "Test";



validarPalabra($palabra,0);


//Funciones
function validarPalabra($palabra,$max){

    $cantCaracteres = strlen($palabra);
    //var_dump($cantCaracteres);

    //valido la cantidad de caracteres
    //var_dump(($cantCaracteres > $max));
    if(($cantCaracteres > $max) && !validarListaDePalabras($palabra)){
         echo "0";
    }else{
        echo "1";
    }
}

function validarListaDePalabras($palabra){
    if($palabra == "Recuperatorio" || $palabra == "Parcial"|| $palabra == "Programación"){
        return true;
    }else{
        return false;
    }
}


?>