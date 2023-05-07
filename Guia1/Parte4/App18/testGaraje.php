<?php
// En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los métodos.


include_once "garaje.php";

//Creo autos
// ● Crear dos objetos “Auto” de la misma marca y distinto color.
$autoUno = new Auto("FIAT","Rojo");
$autoDos = new Auto("FIAT","Azul");

// ● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
$autoTres = new Auto("FORD","Verde",150);
$autoCuatro = new Auto("FORD", "Verde",235);

// ● Crear un objeto “Auto” utilizando la sobrecarga restante.
$autoCinco = new Auto("AUDI","Blanco",155,"25/10/2020");

//Creo un garaje

$garajeUno = new Garaje("El Guardian",1500);
$garajeDos = new Garaje("Los Hermanos", 2500);
$miGarage = new Garaje("M22", 2000);

//Agrego un auto
$garajeUno->AddAuto($autoUno);

//Verifico

//Uso metodo equals
if($garajeUno->Equals($autoUno)){
    echo "Uso el metodo Equals()" . "<br>";
}

//Uso metodo Add
$miGarage->AddAuto($autoUno);
$miGarage->AddAuto($autoDos);
$miGarage->AddAuto($autoTres);
$miGarage->AddAuto($autoCuatro);

$miGarage->MostrarGarage();

$miGarage->Remove($autoDos);
$miGarage->Remove($autoCuatro);

$miGarage->MostrarGarage();

$miGarage->Remove($autoDos);
$miGarage->Remove($autoCuatro);

?>