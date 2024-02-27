<?php
//subclasse calcular area
require_once("Shape.php");
class Rectangle extends Shape{

    function area(){
        return $this->base * $this->alt;
    }
}
?>