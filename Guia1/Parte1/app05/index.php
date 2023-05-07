<?php
/*
Aplicación Nº 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.
*/

//Variables
$num = 20;

NumeroALetras($num);

function NumeroALetras($numero){
    
    //Paso el número a array
    $numArray = array_map('intVal', str_split($numero));
    //var_dump($numArray);

    echo DecenasALetras($numArray[0]);
    echo UnidadesALetras($numArray[1]);

}

function DecenasALetras($decena){

    switch ($decena) {
        case 2:
            echo "Veinte";
            break;
    
        case 3:
            echo "Treinta";
            break;
    
        case 4:
            echo "Cuarenta";
            break;
    
        case 5:
            echo "Cincuenta";
            break;

        case 6:
            echo "Sesenta";
            break;
    
        case 7:
            echo "Setenta";
            break;
    
        case 8:
            echo "Ochenta";
            break;
    
        case 9:
            echo "Noventa";
            break;
    
        default:
            echo "No se puede hacer, Lo siento :(" . "<br>";
            break;
    }
}

function UnidadesALetras($unidad){

    //var_dump($unidad);
    switch ($unidad) {
        case 0:
            echo "" . "<br>";
            break;

        case 1:
            echo " y uno" . "<br>";
            break;
    
        case 2:
            echo " y dos" . "<br>";
            break;
    
        case 3:
            echo " y tres" . "<br>";
            break;
    
        case 4:
            echo " y cuatro" . "<br>";
            break;
    
        case 5:
            echo " y cinco" . "<br>";
            break;

        case 6:
            echo " y seis" . "<br>";
            break;
    
        case 7:
            echo " y siete" . "<br>";
            break;
    
        case 8:
            echo " y ocho" . "<br>";
            break;
    
        case 9:
            echo " y nueve" . "<br>";
            break;
    
        default:
            echo "No se puede hacer, Lo siento :(" . "<br>";
            break;
    }
}


?>