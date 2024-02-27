<?php
//subclase triangle

class Triangle extends Shape{
    function area(){
        return ($this->base * $this->alt) / 2;
    }
}
?>