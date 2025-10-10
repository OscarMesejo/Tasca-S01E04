<?php 

class Empleado{
    private $nombre;
    private $sueldo;

    public function setValue(string $nombre, float $sueldo){
        
        $this -> nombre = $nombre;
        $this -> sueldo = $sueldo;
    }

    public function getValue(){

        echo "Nombre del empleado: $this->nombre <br>" ;
        echo "Sueldo del empleado: $this->sueldo <br>";

        if ($this->sueldo > 6000) {
            echo "Debe pagar impuestos.<br><br>";
        } else {
            echo "No debe pagar impuestos.<br><br>";
        }
    }
}

$Sergi = new Empleado;
$Sergi->setValue('Sergi', '40000');
$Sergi->getValue();

?>