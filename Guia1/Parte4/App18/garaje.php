<?php
include_once "auto.php";

class Garaje extends Auto
{

    // Crear la clase Garage que posea como atributos privados:
    // _razonSocial (String)
    // _precioPorHora (Double)
    // _autos (Autos[], reutilizar la clase Auto del ejercicio anterior)

    private $_razonSocial;
    private $_precioPorHora;
    private $_autos = Array ();

    // Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros: 
    // i. La razón social.
    // ii. La razón social, y el precio por hora.
    
    public function __construct($razonSocial, $precioPorHora=0 )
    {
        $this->_razonSocial = $razonSocial;
        $this->_precioPorHora = $precioPorHora;

    }

    // Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
    // que mostrará todos los atributos del objeto.  
    public function MostrarGarage(){
        echo "Razon Social: " . $this->_razonSocial . "<br>";
        echo "Precio por Hora: " . $this->_precioPorHora . "<br>";
        echo "Autos: " . "<br>";
        foreach ($this->_autos as $auto) {
            echo "- " . Auto::MostrarAuto($auto) . "<br>";
        }
    }

    // Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
    // objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
    public function Equals($auto)
    {
        foreach ($this->_autos as  $autoEnGaraje) {
            if($autoEnGaraje == $auto){
                return true;
            }else{
                return false;
            }
        }
    }

    // Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
    // (sólo si el auto no está en el garaje, de lo contrario informarlo).
    // Ejemplo: $miGarage->Add($autoUno);
    public function AddAuto($auto){

        if(!$this->Equals($auto)){
            array_push($this->_autos,$auto);
            echo "Se agrego el auto al garaje. " . "<br>";
        }else{
            echo "El auto ya se encuentra en el garaje. " . "<br>";
        }
    }

    // Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
    // “Garage” (sólo si el auto está en el garaje, de lo contrario informarlo). 
    // Ejemplo: $miGarage->Remove($autoUno);

    public function Remove($auto){
        
        if($this->Equals($auto)){

            foreach ($this->_autos as $key => $autoEnGaraje) {
                if($autoEnGaraje == $auto){
                    unset($this->_autos[$key]);
                    echo "Se quito el auto del garaje. " . "<br>";
                }
            }

        }else{
            echo "El auto no encuentra en el garaje. " . "<br>";
        }
    }

}



?>