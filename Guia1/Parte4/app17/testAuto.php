<?php
// En testAuto.php:


// ● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o no.
// ● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3, 5)

include_once "auto.php";

// ● Crear dos objetos “Auto” de la misma marca y distinto color.
$autoUno = new Auto("FIAT","Rojo");
$autoDos = new Auto("FIAT","Azul");

// ● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
$autoTres = new Auto("FORD","Verde",150);
$autoCuatro = new Auto("FORD", "Verde",235);

// ● Crear un objeto “Auto” utilizando la sobrecarga restante.
$autoCinco = new Auto("AUDI","Blanco",155,"25/10/2020");


// ● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500 al atributo precio.
$autoUno->setPrecio(1500);
$autoDos->setPrecio(1500);
$autoTres->setPrecio(1500);

$autoUno->AgregarImpuestos(21);
$autoDos->AgregarImpuestos(10);
$autoTres->AgregarImpuestos(15.5);

// ● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el resultado obtenido.

$sumaAutoUnoYAutoDos = Auto::Add($autoUno, $autoDos);
$sumaAutotresYAutoCuatro = Auto::Add($autoTres, $autoCuatro);


echo "La suma del auto 1 + el auto 2 es ..." . "<br>" . $sumaAutoUnoYAutoDos . "<br>";
echo "La suma del auto 3 + el auto 4 es ..." . "<br>" . $sumaAutotresYAutoCuatro . "<br>";

// ● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o no.
echo "Comparo el auto 1 con el auto 2" . "<br>";
if($autoUno->Equals($autoUno,$autoDos)){
    echo "Los autos son iguales" . "<br>";
}else {
    echo "Los autos no son iguales" . "<br>";
}

echo "Comparo el auto 1 con el auto 5" . "<br>";
if($autoUno->Equals($autoUno,$autoCinco)){
    echo "Los autos son iguales" . "<br>";
}else {
    echo "Los autos no son iguales" . "<br>";
}


//var_dump($autoUno->Equals($autoUno,$autoDos));


// ● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3, 5)
$muestroAutoUno = Auto::MostrarAuto($autoUno);
$muestroAutotres = Auto::MostrarAuto($autoTres);
$muestroAutoCinco = Auto::MostrarAuto($autoCinco);

//var_dump($muestroAutoUno);

if ($muestroAutoUno != "") {
    echo "Muestro el auto 1: " . "<br>" . $muestroAutoUno . "<br>";
}else{
    echo "No puede mostrarse el auto 1" . "<br>";
}

if ($muestroAutotres != "") {
    echo " Muestro el auto 3: " . "<br>" . $muestroAutotres . "<br>";
}else{
    echo "No puede mostrarse el auto 3" . "<br>";
}

if ($muestroAutoCinco != "") {
    echo " Muestro el auto 3: " . "<br>" . $muestroAutoCinco . "<br>";
}else{
    echo "No puede mostrarse el auto 3" . "<br>";
}


?>