<?php

// Aplicación Nº 2 (Mostrar fecha y estación)
// Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
// distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
// año es. Utilizar una estructura selectiva múltiple.

//Imprimo en diferentes formatos
$fechaActualGuion = date("d-m-Y");
$fechaActualBarra = date("d/m/Y");
$fechaActualPunto = date("d.m.Y");
$mesActual = date("m");
$diaActual = date("d");

echo $fechaActualGuion . "<br/>";
echo $fechaActualBarra . "<br/>";
echo $fechaActualPunto . "<br/>";


var_dump($mesActual);
var_dump($diaActual);

//indico que estación de año es
// Verano: inicia el 21 de diciembre y finaliza el 20 de marzo.
// Otoño: inicia el 20 de marzo al 21 de junio.
// Invierno: inicia el 21 de junio y finaliza el 23 de septiembre.
// Primavera: inicia el 23 de septiembre al 21 de diciembre.

switch ($mesActual) {
    case '01':
        echo "Verano" . "<br/>";
        break;
    case '02':
        echo "Verano" . "<br/>";
        break;
    case '03':
        if($diaActual < 21){
            echo "Verano" . "<br/>";
        }else{
            echo "Otoño" . "<br/>";
        }
        break;
    case '04':
        echo "Otoño" . "<br/>";
        break;
    case '05':
        echo "Otoño" . "<br/>";
        break;
    case '06':
        if($diaActual < 21){
            echo "Otoño" . "<br/>";
        }else{
            echo "Invierno" . "<br/>";
        }
        break;
    case '07':
        echo "Invierno" . "<br/>";
        break;
    case '08':
        echo "Invierno" . "<br/>";
        break;
    case '09':
        if($diaActual < 22){
            echo "Invierno" . "<br/>";
        }else{
            echo "Primavera" . "<br/>";
        }
        break;
    case '10':
        echo "Primavera" . "<br/>";
        break;
    case '11':
        echo "Primavera" . "<br/>";
        break;
    case '12':
        if($diaActual < 22){
            echo "Primavera" . "<br/>";
        }else{
            echo "Verano" . "<br/>";
        }
        break;
                                                                                                                                                                                                                                                                            
    default:
        # code...
        break;
}



?>