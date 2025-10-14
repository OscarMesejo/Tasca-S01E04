<?php

class Triangulo{

    private $ancho;
    private $alt;

    public function __construct ($ancho, $alt){
        $this -> ancho = $ancho;
        $this -> alt = $alt;
    }
    public function areaTriangulo(){
        return ($this -> ancho * $this-> alt) / 2; 
    }
}

class Rectangulo{
    private $ancho;
    private $alt;

    public function __construct ($ancho, $alt){
        $this -> ancho = $ancho;
        $this -> alt = $alt;
    }    
    public function areaRectangulo(){
        return ($this -> ancho * $this -> alt);

    }
}

/* pedimos que se introduzcan los valores de ancho y altura por consola */

$ancho = readline("Introduce el ancho: ");
$alt = readline("Introduce la altura: ");

class Shape{
    private $triangulo;
    private $rectangulo;

    public function __construct($ancho, $alt){
        $this -> triangulo = new Triangulo($ancho, $alt);
        $this -> rectangulo = new Rectangulo($ancho, $alt);
    }

    public function areaTriangulo(){
        return $this -> triangulo -> areaTriangulo();
    }

    public function areaRectangulo(){
        return $this -> rectangulo -> areaRectangulo();
    }
}

$shape = new Shape ($ancho, $alt);
/* $shape -> areaTriangulo();
$shape -> areaRectangulo(); */

echo "El área del triángulo es: " . $shape -> areaTriangulo() . "\n";
echo "El área del rectángulo es: " . $shape -> areaRectangulo() . "\n";

?>