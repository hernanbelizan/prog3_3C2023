<?php

/*
 * Aplicación Nº 9 (Arrays asociativos)
 * Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
 * contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
 * lapiceras.
 */

//Variables
$lapicera1 = crearLapicera("Rojo","BIC","Fino",50);
$lapicera2 = crearLapicera("Azul","Faber Castel","Fino",75);
$lapicera3 = crearLapicera("Verde","Filgo","Semi Gruezo",110);

//Muestro las lapiceras creadas
echo "Lapicera 1 " . "<br>";
mostrar($lapicera1) ;
echo "Lapicera 2 " . "<br>";
mostrar($lapicera2);
echo "Lapicera 3 " . "<br>";
mostrar($lapicera3);


//Funciones

function crearLapicera($color,$marca,$trazo,$precio){

    $arr = array(
        "Color" => $color,
        "Marca" => $marca,
        "Trazo" => $trazo,
        "Precio" => $precio
    );

    return $arr;

}

function mostrar($arrayLapicera){
    
    foreach ($arrayLapicera as $key => $value) {
        # code...
        echo "$key ==>  $value" . "<br>";
    }
}

?>