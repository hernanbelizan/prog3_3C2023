<?php

// Aplicación Nº 10 (Arrays de Arrays)
// Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
// contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
// Arrays de Arrays.


//Variables
$arrayDeLapiceras = array();

//Creación de lapiceras
$lapicera1 = crearArrayAsociativo("Rojo","BIC","Fino",50);
$lapicera2 = crearArrayAsociativo("Azul","Faber Castel","Fino",75);
$lapicera3 = crearArrayAsociativo("Verde","Filgo","Semi Gruezo",110);

//Carga de datos
$arrayDeLapiceras = crearLapiceraArrayIndexado($arrayDeLapiceras,$lapicera1);
$arrayDeLapiceras = crearLapiceraArrayIndexado($arrayDeLapiceras,$lapicera2);
$arrayDeLapiceras = crearLapiceraArrayIndexado($arrayDeLapiceras,$lapicera3);

// var_dump($arrayDeLapiceras);
// var_dump($lapicera1);
// var_dump($lapicera2);
// var_dump($lapicera3);
//Muestro los datos

//var_dump($arrayDeLapiceras);
mostrarLapiceras($arrayDeLapiceras);


//Funciones
function crearArrayAsociativo($color,$marca,$trazo,$precio){

    $arr = array(
        "Color" => $color,
        "Marca" => $marca,
        "Trazo" => $trazo,
        "Precio" => $precio
    );

    return $arr;

}

function crearLapiceraArrayIndexado($arrayDeLapiceras,$arrayLapicera){

    array_push($arrayDeLapiceras,$arrayLapicera);
    //var_dump($arrayDeLapiceras);
    return $arrayDeLapiceras;
}


function mostrarLapiceras($arrayLapiceras){

    $cont = 1;
    foreach ($arrayLapiceras as $lapicera) {
        # code...
        //var_dump($arrayLapiceras);
        echo "Lapicera $cont" . "<br>";
        foreach ($lapicera as $key => $value) {
            # code...
            //var_dump($lapicera);
            echo "$key ==>  $value" . "<br>";
        }
        $cont ++;
    }
}

?>