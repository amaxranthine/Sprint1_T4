<?php
//subclase triangle
require_once("Shape.php");
class Triangle extends Shape{
    function area(){
        return ($this->base * $this->alt) / 2;
    }
}
?>