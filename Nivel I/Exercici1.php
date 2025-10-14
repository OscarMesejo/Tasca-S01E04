<?php 

$nombre = readline("Introduce el nombre del empleado: ");
$sueldo = readline ("Introduce el sueldo del empleado: ");

class Empleado{
    private $nombre;
    private $sueldo;

    public function setValue(string $nombre, float $sueldo){
        
        $this -> nombre = $nombre;
        $this -> sueldo = $sueldo;
    }

    public function getValue(){

        echo "Nombre del empleado: $this->nombre \n" ;
        echo "Sueldo del empleado: $this->sueldo \n";

        if ($this->sueldo > 6000) {
            echo "Debe pagar impuestos. \n";
        } else {
            echo "No debe pagar impuestos. \n";
        }
    }
}

$Sergi = new Empleado;
$Sergi->setValue( $nombre, $sueldo);
$Sergi->getValue();

?>