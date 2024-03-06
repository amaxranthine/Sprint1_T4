/*- Exercici 1
Crea una classe Employee, defineix com a atributs el seu nom i sou. 
Definir un mètode initialize que rebi 
com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar 
o no impostos (si el sou supera 6000, paga impostos).*/
<?php

 class Employee{
       
   public $nombre;
   public $sou;
 //constructor
    public function __construct($nombre, $sou){
    $this->nombre = $nombre;
    $this->sou = $sou;
    }
// Segundo paso Plantejar un segon mètode print que imprimeixi el nom 
   public function printNomSou(){
            
            if ($this->sou>=6000){
				$respuesta = '$this->nombre Has de pagar impuestos';
			}else{
				$respuesta = ' $this->nombre No has de pagar impuestos';
			}
         return $respuesta;
		} 
   }

 
?>