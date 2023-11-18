<?php
namespace App\Controllers;

class HomeController{
    //methodo 
    function __construct()
    {
       // echo "<br> construyendo HOME controller";

    }
    
    function index(){
        echo "<br> En e INDEX de HOME";
        require "../Views/home/index.php";
    }
    function show(){
        echo "<br> En de SHOW de HOME";
        require "../Views/home/index.php";
    }

}//fin class

echo "<br>Mostrando contenidos con la Dwes";
//Paa usar nuestra clase orimero aasignamos una variable

