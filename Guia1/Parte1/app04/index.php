<?php
/*
aplicación nº 4 (calculadora)
escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. de acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.
*/

//Variables
$operador = "";
$op1 = 5;
$op2 = 0;

switch ($operador) {
    case '+':
        $resultado = $op1 + $op2;
        echo "Suma --> $op1 + $op2 ==> $resultado";
        break;
    case '-':
        $resultado = $op1 - $op2;
        echo "Resta --> $op1 - $op2 ==> $resultado";
        break;
    case '/':
        if($op2 == 0){
            echo "No se permite la división por cero";
        }else{
            $resultado = $op1 / $op2;
            echo "División --> $op1 / $op2 ==> $resultado";
        }
        break;
    case '*':
        $resultado = $op1 * $op2;
        echo "Multiplicación --> $op1 * $op2 ==> $resultado";
        break;
                            
    default:
        echo "Ingrese valores";
        break;
}


?>