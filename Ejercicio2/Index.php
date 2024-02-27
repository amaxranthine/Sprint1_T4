/* Exercici 2
Escriu un programa que defineixi 
una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape 
i que calculin respectivament l'àrea de la forma area().*/

<?php
require_once("Triangle.php");
require_once("Rectangle.php");
 // figura 1
 $triangulo = new Triangle(2,2);
 echo "Área para el triángulo: "
 . $triangulo->area();
//figura 2
$rectangulo = new Rectangle(20, 10);
echo "Área para el rectángulo: " . this->area();