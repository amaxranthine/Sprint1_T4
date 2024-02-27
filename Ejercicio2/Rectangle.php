<?php
//subclasse calcular area
class Rectangle extends Shape{

    function area(){
        return $this->base * $this->alt;
    }
}
?>