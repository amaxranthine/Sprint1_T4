/*Exercici 1
Crea una classe Employee, defineix com a atributs el seu nom i sou. 
Definir un mètode initialize que rebi 
com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar 
o no impostos (si el sou supera 6000, paga impostos).*/

<?php
require_once "Employee.php";

$obj = new Employee;
$obj -> initialize ("Laura",1500);
echo $obj->printNom();

?>