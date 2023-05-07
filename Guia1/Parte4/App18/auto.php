<?php


class Auto
{
    // Realizar una clase llamada “Auto” que posea los siguientes atributos
    // privados: _color (String)
    // _precio (Double)
    // _marca (String).
    // _fecha (DateTime)
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;


    // Realizar un constructor capaz de poder instanciar objetos pasándole como
    // parámetros: 
    // i. La marca y el color.
    // ii. La marca, color y el precio.
    // iii. La marca, color, precio y fecha.
    public function __construct($marca,$color,$precio=0,$fecha="")
    {
        $this->_marca = $marca;
        $this->_color = $color;
        $this->_precio = $precio;
        if ($fecha == "") {
            $this->_fecha = date('d/m/Y');
        } else {
            $this->_fecha = date($fecha);
        }      
    }


    public function getMarca()
    {
        return $this->_marca;
    }

    public function getColor()
    {
        return $this->_color;
    }

    public function getPrecio()
    {
        return $this->_precio;
    }

    public function getFecha()
    {
        return $this->_fecha;
    }

    public function setMarca($valor)
    {
        $this->_marca = $valor;
    }

    public function setColor($valor)
    {
        $this->_color = $valor;
    }
    public function setPrecio($valor)
    {
        $this->_precio = $valor;
    }

    public function setFecha($valor)
    {
        $this->_fecha = $valor;
    }

    // Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble
    // por parámetro y que se sumará al precio del objeto.
    public function AgregarImpuestos($impuesto){
        $this->_precio += $impuesto;
    }

    // Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
    // por parámetro y que mostrará todos los atributos de dicho objeto.
    public static function MostrarAuto($auto){
        //var_dump($auto);
        return "Marca: " . $auto->_marca . "<br>" .
        "Color: " . $auto->_color . "<br>" .
        "Precio: " . $auto->_precio . "<br>" .
        "Fecha: " . $auto->_fecha . "<br>";
    }

    // Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
    // devolverá TRUE si ambos “Autos” son de la misma marca.
    public function Equals($auto){

        if($this->_marca == $auto->_marca){
            return true;
        }else{
            return false;
        }
    }
    
    //Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
    // de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
    // la suma de los precios o cero si no se pudo realizar la operación.
    // Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
    public static function Add($autoUno, $autoDos){

        if($autoUno->Equals($autoDos) && $autoUno->_color == $autoDos->_color){
            return ($autoUno->_precio + $autoDos->_precio) . "<br>";
        }else{
            //echo "No es posible. No son de la misma marca ni del mismo color" . "<br>";
            return 0;
        }
    }



}



?>