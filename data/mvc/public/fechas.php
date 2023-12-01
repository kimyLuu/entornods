<?php
$cadenafecth ="12/10/2022"; //Una cadena de  tipo fecha

//Clase 
$fecha =DateTime::createFromFormat('d/m/Y',$cadenafecth);//Le pasa la cadena que quiero formatear en formato string proporcionado 
echo "<br>Objeto Fecha: ";
var_dump($fecha);//Para ver se necesita 
$sfecha =$fecha->format('#Y#m#d');//Se necesita hacer esto para ver formateo el objeto con el #y.. y esto se conviente en una cadena
echo "<br>cad fecha: ".$sfecha;

